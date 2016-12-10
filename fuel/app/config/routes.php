<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'welcome' => array(array('GET', new Route('welcome/blank'))),
	'accesos/modulo/listar'  => array(array('GET', new Route('welcome/listar'))),
	//http://localhost:3000/accesos/modulo/listar?data=
);
