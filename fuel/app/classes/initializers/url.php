<?php
class Url
{
    public static function base_url()
    {
       return 'http://localhost/fuel/';
    }

    public static function statics()
    {
       return 'http://localhost/fuel/public/';
    }

    public static function get_service($key)
    {
        $services = array(
            'accesos' => 'http://localhost/accesos/', 
            'acl' => 'http://localhost:3003/',
            'ubicaciones' => 'http://localhost/ubicaciones/',
            'administracion' => 'http://localhost/administracion/',
            'archivos' => 'http://localhost/archivos/',
            'ftp' => '192.168.1.12',
        );
        return $services[$key];
    }
}
?>