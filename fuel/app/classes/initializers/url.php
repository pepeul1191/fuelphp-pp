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
        $services = array('accesos' => 'http://localhost:5001/', 'acl' => 'http://localhost:3003/');
        return $services[$key];
    }
}
?>