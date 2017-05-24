<?php
/* Smarty version 3.1.31, created on 2017-05-23 21:22:56
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/administracion/sede/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5924ee80918575_85645968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbb605b1b876807ccf78db471257807e9eedcaef' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/administracion/sede/index.tpl',
      1 => 1495572665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5924ee80918575_85645968 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-12 workspace">
	<form action="#" class="sky-form">
		<header>Sedes</header>
		<fieldset>
			<label class="oculto" id="idEmpresa"><?php echo $_smarty_tpl->tpl_vars['empresa_id']->value;?>
</label>
			<label class="texto-der oculto" id="txtMensajeRpta"></label>
			<table class="list issues" style="" id="tablaSedes"></table>
		</fieldset>
	</form>
</div><?php }
}
