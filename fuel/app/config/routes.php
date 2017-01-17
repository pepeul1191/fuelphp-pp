<?php
return array(
	'_root_'  => 'home/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	# login
	'login' => array(array('GET', new Route('login/index'))),
	'login/acceder' => array(array('POST', new Route('login/acceder'))),

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'welcome' => array(array('GET', new Route('welcome/blank'))),
	'accesos' => array(array('GET', new Route('accesos/usuario/index/'))),

	# accesos
	# accesos / item
	'accesos/item/listar/:subtitulo_id' => array(array('GET', new Route('accesos/item/listar'))),
	'accesos/item/guardar' => array(array('GET', new Route('accesos/item/guardar'))),
	# accesos / menu
	'accesos/menus' => array(array('GET', new Route('accesos/menu/index'))),
	# accesos / modulo
	'accesos/modulo/listar'  => array(array('GET', new Route('accesos/modulo/listar'))),
	'accesos/modulo/guardar'  => array(array('POST', new Route('accesos/modulo/guardar'))),
	# accesos / subtitulo
	'accesos/subtitulo/listar/:modulo_id' => array(array('GET', new Route('accesos/subtitulo/listar'))),
	'accesos/subtitulo/guardar' => array(array('GET', new Route('accesos/subtitulo/guardar'))),
	# accesos / usuarios
	'accesos/usuarios' => array(array('GET', new Route('accesos/usuario/index'))),
	'accesos/usuario/listar' => array(array('GET', new Route('accesos/usuario/listar'))),
	'accesos/usuario/ver_accesos' => array(array('GET', new Route('accesos/usuario/ver_accesos'))),
	'accesos/usuario/listar_accesos/:usuario_id' => array(array('GET', new Route('accesos/usuario/listar_accesos'))),
	'accesos/usuario/editar_usuario' => array(array('GET', new Route('accesos/usuario/editar'))),
	'accesos/usuario/ver_roles_permisos' => array(array('GET', new Route('accesos/usuario/ver_roles_permisos'))),
	'accesos/usuario/listar_permisos/:usuario_id' => array(array('GET', new Route('accesos/usuario/listar_permisos'))),
	'accesos/usuario/listar_roles/:usuario_id' => array(array('GET', new Route('accesos/usuario/listar_roles'))),
	'accesos/usuario/asociar_permisos' => array(array('POST', new Route('accesos/usuario/asociar_permisos'))),
	'accesos/usuario/asociar_roles' => array(array('POST', new Route('accesos/usuario/asociar_roles'))),
);

/*
    get '/accesos/menu/menu_modulos' => 'accesos/menu#menu_modulos'
    get '/accesos/permisos' => 'accesos/permiso#index'
    get '/accesos/permiso/listar' => 'accesos/permiso#listar'
    post '/accesos/permiso/guardar' => 'accesos/permiso#guardar'
    get '/accesos/permiso/listar_asociados/:id' => 'accesos/permiso#listar_asociados'
    get '/accesos/roles' => 'accesos/rol#index'
    get '/accesos/rol/listar' => 'accesos/rol#listar'
    post '/accesos/rol/guardar' => 'accesos/rol#guardar'
    post '/accesos/rol/asociar_permisos' => 'accesos/rol#asociar_permisos'
    
*/