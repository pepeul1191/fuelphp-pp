<?php
/* Smarty version 3.1.31, created on 2017-05-17 15:34:49
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/maestros/departamento/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_591cb3e9164106_74032882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e23f1ebd3d2fca5481a0fb791119318bfd535639' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/maestros/departamento/index.tpl',
      1 => 1495053287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591cb3e9164106_74032882 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-12 workspace">
	<form action="#" class="sky-form">
		<header>Lista de Departamentos / Provincias / Distritos</header>
		<fieldset>
			<div class="col-md-12 workspace">
				<label class="texto-der oculto" id="txtMensajeRpta"></label>
			</div>
			<div class="col-md-4 workspace">
				<label class="oculto" id="departamento_id"></label>
				<h5 class="subtitulo" style="margin-bottom:15px">Departamentos</h5>
				<table class="list issues" style="" id="tablaDepartamentos"></table>
			</div>
		<div class="col-md-4 workspace">
			<label class="oculto" id="provincia_id"></label>
			<h5 class="subtitulo" style="margin-bottom:15px">Provincias</h5>
			<table class="list issues" style="" id="tablaProvincias"></table>
		</div>
		<div class="col-md-4 workspace">
			<h5 class="subtitulo" style="margin-bottom:15px">Distritos</h5>
			<table class="list issues" style="" id="tablaDistritos"></table>
		</div>
		</fieldset>
	</form>
</div><?php }
}
