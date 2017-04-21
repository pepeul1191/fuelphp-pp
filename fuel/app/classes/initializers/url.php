<?php
class Url
{
    public static function base_url()
    {
       return 'http://localhost:3000/';
    }

    public static function statics()
    {
       return 'http://localhost:8001/html-unify/';
    }

    public static function get_service($key)
    {
        $services = array('accesos' => 'http://localhost:5001/', 'acl' => 'http://localhost:3003/');
        return $services[$key];
    }
}
?>