<?php
/* Smarty version 3.1.31, created on 2017-01-17 16:37:56
  from "/home/pepe/Documentos/php/fuelphp/fuel/app/views/accesos/usuario/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_587e8eb4736ab3_00176154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70903a7f3006e4894bc5c284cdbd69a7dc33cd5b' => 
    array (
      0 => '/home/pepe/Documentos/php/fuelphp/fuel/app/views/accesos/usuario/index.tpl',
      1 => 1484689074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587e8eb4736ab3_00176154 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<h2 class="titulo">Accesos / Usuarios</h2>
	<div class="row borde-bajo">
		<h5 class="subtitulo">Gestione los Usuarios del Sistema</h5>
	</div>
</div>
</br>
<div class="widget">
	<div class="widget-header bordered-bottom bordered-blue">
		<span class="widget-caption">Basic Form</span>
	</div>
	<div class="widget-body">
		<div>
			<label class="texto-der oculto" id="txtMensajeRpta"></label>
		<label class="oculto" id="usuario_id"></label>
		<table class="list issues" style="" id="tablaUsuarios"></table>
		</div>
	</div>
</div><?php }
}
