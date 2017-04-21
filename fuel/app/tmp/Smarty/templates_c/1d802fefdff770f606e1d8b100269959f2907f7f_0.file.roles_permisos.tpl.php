<?php
/* Smarty version 3.1.31, created on 2017-04-21 11:59:44
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/usuario/roles_permisos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fa3a80859b70_44654576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d802fefdff770f606e1d8b100269959f2907f7f' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/usuario/roles_permisos.tpl',
      1 => 1491338588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fa3a80859b70_44654576 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body" style="padding-bottom: 15px;">
	<div class="row">
		<div class="col-md-7 workspace">
			<label class="texto-der oculto" id="txtMensajeRptaModal"></label>
			<label class="oculto" id="id_rol"></label>
			<h5 class="subtitulo" style="margin-bottom:15px">Permisos del Usuario</h5>
			<table class="list issues" style="" id="tablaPermisos"></table>
		</div>
		<div class="col-md-5 workspace">
			<h5 class="subtitulo" style="margin-bottom:15px">Roles del Usuario</h5>
			<table class="list issues" style="" id="tablaRoles"></table>
		</div>
	</div>
</div><?php }
}
