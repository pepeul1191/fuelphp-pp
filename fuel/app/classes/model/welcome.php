<?php

namespace Model;

class Welcome extends \Model {

    public static function get_results()
    {
        // Database interactions
    	$db = \DB::instance('mysql')->connection();
    	$stmt = $db->prepare('SELECT * FROM usuarios');
    	$stmt->execute();
		$rpta = $stmt->fetchAll();

    	return $rpta;
    }

	public static function listar_usuarios()
    {
        // Database interactions
    	$db = \DB::instance('accesos')->connection();
    	$stmt = $db->prepare('SELECT * FROM usuarios');
    	$stmt->execute();
		$rpta = $stmt->fetchAll();

    	return $rpta;
    }


}

?>