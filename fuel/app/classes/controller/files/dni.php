<?php

class Controller_Files_Dni extends Controller
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
                $file_destino = 'Documentos/DNIs/' . $value[0]['saved_as'];

                $ftp->connect();
                $ftp->upload($file_origen, $file_destino, 'binary', 0775);
                $ftp->close();
            } catch (Exception $e) {
                $rpta = 'Excepción capturada: '.  $e->getMessage();
            }
         } 

        return $rpta;
    }
}

?>