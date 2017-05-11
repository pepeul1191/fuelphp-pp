<?php
/* Smarty version 3.1.31, created on 2017-05-10 21:24:55
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/sistema/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5913cb776496c3_28462909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77ebeaa661bed984967cf43947e90502ac39eb43' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/sistema/menu.tpl',
      1 => 1494469489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5913cb776496c3_28462909 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body" style="padding-bottom: 15px;">
	<div class="row">
		<div class="col-md-4 workspace">
			<label class="texto-der oculto" id="txtMensajeRptaModal"></label>
			<h5 class="subtitulo" style="margin-bottom:15px">Módulos del Sistema</h5>
			<table class="list issues" style="" id="tablaModulos"></table>
		</div>
		<div class="col-md-4 workspace">
			<label id="id_modulo" class="oculto"></label>
			<h5 class="subtitulo" style="margin-bottom:15px">Subtítulos del Módulo</h5>
			<table class="list issues" style="" id="tablaSubtitulos"></table>
		</div>
		<div class="col-md-4 workspace">
			<label id="id_subtitulo" class="oculto"></label>
			<h5 class="subtitulo" style="margin-bottom:15px">Items del Subtitulo</h5>
			<table class="list issues" style="" id="tablaItems"></table>
		</div>
	</div>
</div><?php }
}
