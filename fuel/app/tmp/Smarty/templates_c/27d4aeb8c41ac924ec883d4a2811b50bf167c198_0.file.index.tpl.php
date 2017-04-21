<?php
/* Smarty version 3.1.31, created on 2017-04-21 11:16:45
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/menu/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fa306d795245_48326198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27d4aeb8c41ac924ec883d4a2811b50bf167c198' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/menu/index.tpl',
      1 => 1492791403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fa306d795245_48326198 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-4 workspace">
	<form action="#" id="sky-form4" class="sky-form" novalidate="novalidate">
		<header>Módulos del Sistema</header>
		<fieldset>
		<label class="texto-der oculto" id="txtMensajeRpta"></label>
		<table class="list issues" style="" id="tablaModulos"></table>
		</fieldset>
	</form>
</div>
<div class="col-md-4 workspace">
	<form action="#" id="sky-form4" class="sky-form" novalidate="novalidate">
		<header>Subtítulos del Módulo</header>
		<fieldset>
			<label id="id_modulo" class="oculto"></label>
			<label class="texto-der oculto" id="txtMensajeRpta"></label>
			<table class="list issues" style="" id="tablaSubtitulos"></table>
		</fieldset>
	</form>
</div>
<div class="col-md-4 workspace">
	<form action="#" id="sky-form4" class="sky-form" novalidate="novalidate">
		<header>Items del Subtitulo</header>
		<fieldset>
		<div class="col-md-4 workspace">
			<label id="id_subtitulo" class="oculto"></label>
			<label class="texto-der oculto" id="txtMensajeRpta"></label>
			<table class="list issues" style="" id="tablaItems"></table>
		</div>
		</fieldset>
	</form>
</div><?php }
}
