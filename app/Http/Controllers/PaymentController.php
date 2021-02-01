<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use phpseclib\Crypt\RSA;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{
    //Mostrar el formulario de pago
    public function paymentForm($monto, $id)
    { 
          return view('pages.payment',compact('monto', 'id'));
    }

    //recuperar datos del formulario
    public function pay( Request $request) {
        $incoming = $request->all();

        //dd($incoming);
        //Tipos de paquetes que tendra
        switch ($incoming['idPaquete']) {
            //Prueba Gratis
            case "demo":
               // dd("Creado directamente demo en Mago");
                $mago_package_id = 1;
                //$crm_package_id = 105;

                //Llama la funcion para crear en mago
                $this->createCustomer($incoming,$mago_package_id);
                //retorna nuevamente a la pantalla anterior
                return redirect()->back();
                //return view('site.price_list');
                break;

            //Cuando ya se debe de pagar por el servicio
            case "basico":
               // dd("Verificar con el banco y crear Mago");
                $mago_package_id = 1;
                //$crm_package_id = 108;
                break;
            default:
                dd('No esta funcionando el id del paquete');
                $mago_package_id = 1;
               // $crm_package_id = 105;
        }

        /* ------------------------------------- */

        //========================= BANCO =============================================================
        
            //dd($incoming);
            $publicKey = <<<EOT
            -----BEGIN PUBLIC KEY-----
            MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwxrT23HlSVH0e6rcRc0rr/ENULUHnQVYREkjvvqEp3M+
            av9MAjgtUio0yO4voZXNzLUIJR9ONcdBXS3JJI/RODvCkW17Py24RTHPeqXy9oCyLDMMemK6sTFOfPFSRWvro0rX
            kMv8apxGFqEU13VCqjhUmJWnRKtQgKlvhoAR5pR7W+OGuVIoQpJW75ccF7eNLvxYL/GDON7WeELwK1XE55S9BQFP
            DpIAD0tzH4Od971Uz0WYkIjinKZU8G6SmW+ptZtdU8DoS1BvbWRclMUYWm6BS2W0dpsNMQfO/HE5OAqCtZK9NLQJ
            nXeG2U31giezdauNBP48QAKpjT9HRhih8wIDAQAB
            -----END PUBLIC KEY----
            EOT;

            $key = new RSA();
            $key->loadKey($publicKey);

                
            $payload = array(
                'Card' => $incoming['creditcard'],
                        'InfoS' => $incoming['cvcode'],
                        'InfoV' => $incoming['expiracion'],
                        'Amount' => str_pad( str_replace('.', '', $incoming['monto']), 12, '0', STR_PAD_LEFT)
                        );

             //dd($payload);

             $encrypted = $key->encrypt(json_encode($payload));
             $encrypted = base64_encode($encrypted);

            // dd($encrypted);

            $response_agricola = Http::withOptions([
                //'debug' => true,
                'verify' => false
            ])->post('https://www.serfinsacheckout.com/PaymentRest/Payment', [
            "KeyInfo" => "d909ba52-bb82-40db-a2b4-f9fdacc6e6dc",
            "PaymentData" => $encrypted
            ]);

            //dd($response_agricola);

            if ($response_agricola->json('Satisfactorio')) {
                //Si transaccion exitosa aprovisionar a mago
               // dd("Funciono");
                $this->createCustomer($incoming,$mago_package_id);
                //toast('Pago y suscripcion realizados exitosamente!','success');
                return redirect()->back();
            }else {
               // dd("No se realizo ");
                //toast('No se pudo realizar su pago','error');
                return redirect()->back();
            }
            


            


        
    }//fin funcion 


    //Funcion CREAR USUARIO MAGO
    public function createCustomer ($incoming,$mago_package_id) {
        //Recuperacion de datos para mago

        $create_info['nombreCompleto'] = $incoming['nombre'] . ' ' . $incoming['apellido'] ;
        $create_info['telefono'] = $incoming['telefono'];
        $create_info['correo'] = $incoming['correo'];
        $create_info['ciudad'] = $incoming['ciudad'];
        $create_info['pais'] = $incoming['pais'];
        $create_info['docIdentidad'] = $incoming['documentoIdentidad'];
        $create_info['paquete'] = $mago_package_id;

        //dd($create_info);
        //MAGO
        //paso 1: Validacion de clientes
        //1.1 Hacer llamada  a la api para verificar la existencia del cliente
            $response = Http::withOptions([
                'debug' => false,
                'verify' => false
            ])->asForm(
        )->post('https://pwapixel.instel.site:4433/api/public/customer/'. $create_info['correo'].'?apikey=1ea1bfb6c24075628f8b9d9e38651563', [
        ]);

       // dd($response);

        
            
        //Paso 2: Condiciona la existencia del cliente. 
        //Se utilizan manejo de errores de Guzzle
        // Determine if the status code is >= 400...
        if($response->failed()){
           // dd("el cliente no existe");
            //Paso 2.1  Creacion de usuario en mago
            try {
                $response = Http::withOptions([
                    'debug' => false,
                    'verify' => false
                ])->asForm(

                )->post('https://pwapixel.instel.site:4433/api/public/customer?apikey=1ea1bfb6c24075628f8b9d9e38651563', [
                    "firstname" => $incoming['nombre'] ,
                    "lastname" => $incoming['apellido'],
                    "email"  =>  $create_info['correo'],
                    "city" =>  $create_info['ciudad'],
                    "country" => $create_info['pais'] ,
                    "telephone" => $create_info['telefono'],
                    "product_id" => $create_info['paquete'],
                    "password" => $create_info['docIdentidad'],
                    "username" => $create_info['correo'],
                    "show_adult" => "0"
                ]);


                     //Paso 2.2 Asignacion de paquete en mago
                try {
                    $transactionId = Str::random(25);
                    $response = Http::withOptions([
                        'debug' => false,
                        'verify' => false
                    ])->asForm(
                    )->post('https://pwapixel.instel.site:4433/api/public/subscription?apikey=1ea1bfb6c24075628f8b9d9e38651563', [
                        "username" => $create_info['correo'],
                        "product_id" => $mago_package_id,
                        "type" => "subscr",
                        "transaction_id" => $transactionId
                    ]);
                    //return response()->json($mago_package_id.$transactionId, 200);
                   // toast('Suscripcion Realizada Exitosamente!','success');
                   dd("Se creo y se asigno paquete");
                } catch (Exception $e) { 
                    //toast('Ha ocurrido un error','error');

                    dd("No se puedo ");
                }

               // dd($response);
                //return response()->json("username:". $incoming['billing']['email'].$create_info['document_id'], 200);
            } catch (Exception $e) {
                dd("No se crea");
             }

                     

        }else{

           // dd("Existe");
            //CASO 2: USUARIO YA EXISTE
	        //Se cumple  cuando el usuario ya existe en la base de datos, puesto que no se puede repetir username
	        //Aqui solo se le asignara o sobreescribira el paquete  con el cual cuenta  el cliente

	        //paso 1: Renovaciond e paquete en MAGO 
                try {
                    $transactionId = Str::random(25);
                    $response = Http::withOptions([
                        'debug' => false,
                        'verify' => false
                    ])->asForm(
                    )->post('https://pwapixel.instel.site:4433/api/public/subscription?apikey=1ea1bfb6c24075628f8b9d9e38651563', [
                        "username" => $create_info['correo'],
                        "product_id" => $mago_package_id,
                        "type" => "subscr",
                        "transaction_id" => $transactionId
                    ]);
                //return response()->json($mago_package_id.$transactionId, 200);
                //toast('Suscripcion Realizada Exitosamente!','success');
                //dd("Ya existia , pero se le asigno paquete");
                dd($response);
                
            } catch (Exception $e) { 
                //toast('Se ha producido un error','error');
                dd("Existe, pero sucedio un error al asignar el paquete");
            }

        }


    }//fin createCustomer

}

