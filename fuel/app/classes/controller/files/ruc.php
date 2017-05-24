<?php

class Controller_Files_Ruc extends Controller
{
    public function before()
    {
        if (Session::get('autenticado') != true){
            Response::redirect(Url::base_url() .'login' , 'refresh');
        }
    }

    public function action_subir()
    {
        //Fuente : https://stackoverflow.com/questions/13322749/simple-file-upload-for-fuelphp
        $config = array(
            'path' => DS.'tmp',
            'randomize' => true,
            'ext_whitelist' => array('pdf'),//array('img', 'jpg', 'jpeg', 'gif', 'png'),
            'max_size'    => 2621440, // 10240 = 10kb
        );

        Upload::process($config);

        $rpta = "";

        if (Upload::is_valid()){
            Upload::save();
            $value = Upload::get_files(); 
            try {
                $ftp_server = Url::get_service('ftp');//"192.168.1.12";
                $ftp_username = 'pepe';
                $ftp_userpass = 'kiki123';
                
                $ftp = Ftp::forge(array(
                    'hostname' => $ftp_server,
                    'username' => $ftp_username,
                    'password' => $ftp_userpass,
                    'timeout'  => 90,
                    'port'     => 21,
                    'passive'  => true,
                    'ssl_mode' => false,
                    'debug'    => false
                ), false);
                
            
                $file_origen = $value[0]['saved_to'] . $value[0]['saved_as'];
                $file_destino = 'Documentos/RUCs/' . $value[0]['saved_as'];

                $ftp->connect();
                $ftp->upload($file_origen, $file_destino, 'binary', 0775);

                $rest = new Rest(Url::get_service('archivos') . 'extension/obtener_id?mime_extension=' . $value[0]['mimetype']);
                $extension_id = json_decode($rest->get());
                $data = array(
                    'nombre' => Input::post('nombre'),
                    'descripcion' => Input::post('descripcion'),
                    'nombre_generado' => $value[0]['saved_as'],
                    "carpeta" => 'RUCs/',
                    'extension_id' => $extension_id
                );
                $rest = new Rest(Url::get_service('archivos') . 'archivo/guardar?data=' . json_encode($data));
                $archivo_id = $rest->post();
                $rpta = $archivo_id;


                $ftp->close();
            } catch (Exception $e) {
                $rpta = 'Excepción capturada: '.  $e->getMessage();
            }
         } 

        return $rpta;
    }
}

?>