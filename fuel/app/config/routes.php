<?php
return array(
	'_root_'  => 'home/index',  // The default route
	'_404_'   => 'error/index',    // The main 404 route
	# login
	'login' => array(array('GET', new Route('login/index'))),
	'login/acceder' => array(array('OPTIONS', new Route('login/acceder'))),
	#error
	'error/index/:id' => array(array('GET', new Route('error/index'))),
	'error/access/:id' => array(array('GET', new Route('error/access'))),
	#demo
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
	'accesos/modulo/listar/:sistema_id'  => array(array('GET', new Route('accesos/modulo/listar'))),
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
	# accesos / sistema 
	'accesos/sistemas'  => array(array('GET', new Route('accesos/sistema/index'))),
	'accesos/sistema/listar'  => array(array('GET', new Route('accesos/sistema/listar'))),
	'accesos/sistema/guardar'  => array(array('POST', new Route('accesos/sistema/guardar'))),
	'accesos/sistema/ver_menu'  => array(array('GET', new Route('accesos/sistema/ver_menu_modal'))),
	'accesos/sistema/ver_permisos'  => array(array('GET', new Route('accesos/sistema/ver_permiso_modal'))),
	'accesos/sistema/ver_roles'  => array(array('GET', new Route('accesos/sistema/ver_rol_modal'))),
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