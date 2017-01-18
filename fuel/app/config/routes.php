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
	# accesos / permiso
	'accesos/permisos'  => array(array('GET', new Route('accesos/permiso/index'))),
	'accesos/permiso/listar'  => array(array('GET', new Route('accesos/permiso/listar'))),
	'accesos/permiso/listar_asociados/:id'  => array(array('GET', new Route('accesos/permiso/listar_asociados'))),
	'accesos/permiso/guardar' => array(array('POST', new Route('accesos/permiso/guardar'))),
	# accesos / rol
	'accesos/roles'  => array(array('GET', new Route('accesos/rol/index'))),
	'accesos/rol/listar'  => array(array('GET', new Route('accesos/rol/listar'))),
	'accesos/rol/guardar' => array(array('POST', new Route('accesos/rol/guardar'))),
	'accesos/rol/asociar_permisos' => array(array('POST', new Route('accesos/rol/asociar_permisos'))),
	# accesos / subtitulo
	'accesos/subtitulo/listar/:modulo_id' => array(array('GET', new Route('accesos/subtitulo/listar'))),
	'accesos/subtitulo/guardar' => array(array('GET', new Route('accesos/subtitulo/guardar'))),
	# accesos / usuario
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
*/