<?php
/* Smarty version 3.1.31, created on 2017-04-01 23:16:58
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/rol/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e07b3a44b293_43165958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63acc18503f1f9053ebfee949d99a74dc1917002' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/rol/index.tpl',
      1 => 1491002567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e07b3a44b293_43165958 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<h2 class="titulo">Accesos / Funciones / Roles</h2>
	<div class="row borde-bajo">
		<h5 class="subtitulo">Gestione los Roles del Sistema y sus Respectivos Permisos</h5>
	</div>
</div>
</br>
<div class="row">
	<div class="col-md-4 workspace">
		<label class="texto-der oculto" id="txtMensajeRpta"></label>
		<label class="oculto" id="id_rol"></label>
		<table class="list issues" style="" id="tablaRoles"></table>
	</div>
	<div class="col-md-6 workspace">
		<table class="list issues" style="" id="tablaPermisos"></table>
	</div>
</div><?php }
}
