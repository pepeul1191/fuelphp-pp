<?php
class Url
{
    public static function base_url()
    {
       return 'http://localhost/fuel/';
    }

    public static function statics()
    {
       return 'http://localhost:8001/html-unify/';
    }

    public static function get_service($key)
    {
        $services = array(
            'accesos' => 'http://localhost/accesos/', 
            'acl' => 'http://localhost:3003/',
            'ubicaciones' => 'http://localhost/ubicaciones/',
            'administracion' => 'http://localhost/administracion/',
        );
        return $services[$key];
    }
}
?>