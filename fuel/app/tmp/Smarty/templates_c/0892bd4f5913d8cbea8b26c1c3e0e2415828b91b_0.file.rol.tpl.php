<?php
/* Smarty version 3.1.31, created on 2017-05-10 20:04:54
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/sistema/rol.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5913b8b6934ac7_45802461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0892bd4f5913d8cbea8b26c1c3e0e2415828b91b' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/sistema/rol.tpl',
      1 => 1494464692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5913b8b6934ac7_45802461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body" style="padding-bottom: 15px;">
	<div class="row">
		<div class="col-md-4 workspace">
			<label class="texto-der oculto" id="txtMensajeRptaModal"></label>
			<label class="oculto" id="id_rol"></label>
			<h5 class="subtitulo" style="margin-bottom:15px">Roles del Sistema</h5>
			<table class="list issues" style="" id="tablaRoles"></table>
		</div>
		<div class="col-md-8 workspace">
			<h5 class="subtitulo" style="margin-bottom:15px">Lista de Permisos</h5>
			<table class="list issues" style="" id="tablaPermisos"></table>
		</div>
</div><?php }
}
