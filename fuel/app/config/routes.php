<?php
return array(
	'_root_'  => 'home/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'login' => array(array('GET', new Route('login/index'))),
	'login/acceder' => array(array('POST', new Route('login/acceder'))),

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'welcome' => array(array('GET', new Route('welcome/blank'))),
	'accesos/modulo/listar'  => array(array('GET', new Route('welcome/listar'))),
	//http://localhost:3000/accesos/modulo/listar?data=
	'accesos' => array(array('GET', new Route('accesos/usuario/index/'))),
	'accesos/usuarios' => array(array('GET', new Route('accesos/usuario/index'))),
	'accesos/usuario/listar' => array(array('GET', new Route('accesos/usuario/listar'))),
	'accesos/usuario/ver_accesos' => array(array('GET', new Route('accesos/usuario/ver_accesos'))),
	'accesos/usuario/listar_accesos/:usuario_id' => array(array('GET', new Route('accesos/usuario/listar_accesos'))),
);


/*
    get '/accesos/usuarios' => 'accesos/usuario#index'
    get '/accesos/usuario/editar_usuario' => 'accesos/usuario#editar'
    get '/accesos/usuario/ver_roles_permisos' => 'accesos/usuario#ver_roles_permisos'
    get '/accesos/usuario/listar' => 'accesos/usuario#listar'
    get '/accesos/usuario/listar_permisos/:usuario_id' => 'accesos/usuario#listar_permisos'
    get '/accesos/usuario/listar_roles/:usuario_id' => 'accesos/usuario#listar_roles'
    post '/accesos/usuario/asociar_permisos' => 'accesos/usuario#asociar_permisos'
    post '/accesos/usuario/asociar_roles' => 'accesos/usuario#asociar_roles'
    get '/accesos/usuario/listar_accesos/:usuario_id' => 'accesos/usuario#listar_accesos'
*/