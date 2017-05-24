<?php
/* Smarty version 3.1.31, created on 2017-05-23 20:40:44
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/administracion/proveedor/proveedor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5924e49c8118f0_40410256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fd45cda837b4b53a193187586d5f868927da9c0' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/administracion/proveedor/proveedor.tpl',
      1 => 1495590034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5924e49c8118f0_40410256 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-8 workspace">
	<form action="#" class="sky-form">
		<header>Información del Proveedor</header>
		<fieldset>
			<label class="oculto" id="idProveedor"><?php if (isset($_smarty_tpl->tpl_vars['proveedor']->value->{'id'})) {
echo $_smarty_tpl->tpl_vars['proveedor']->value->{'id'};
} else { ?>E<?php }?></label>
			<label class="texto-der oculto" id="txtMensajeRptaProveedor"></label>
			<div class="row row-formulario">
				<div class="col-md-8 workspace">
					<div class="form-group">
					    <label for="txtRazonSocial">Razón Social</label>
					    <input type="text" class="form-control" id="txtRazonSocial" value="<?php if (isset($_smarty_tpl->tpl_vars['proveedor']->value->{'razon_social'})) {
echo $_smarty_tpl->tpl_vars['proveedor']->value->{'razon_social'};
}?>">
					</div>
				</div>
				<div class="col-md-4 workspace">
					<div class="form-group">
					    <label for="txtRuc">RUC</label>
					    <input type="text" class="form-control" id="txtRuc" value="<?php if (isset($_smarty_tpl->tpl_vars['proveedor']->value->{'ruc'})) {
echo $_smarty_tpl->tpl_vars['proveedor']->value->{'ruc'};
}?>">
					</div>
				</div>
			</div>
			<div class="row row-formulario">
				<div class="col-md-12 workspace">
					<div class="form-group">
					    <label for="txtDireccion">Dirección</label>
					    <input type="text" class="form-control" id="txtDireccion" value="<?php if (isset($_smarty_tpl->tpl_vars['proveedor']->value->{'direccion'})) {
echo $_smarty_tpl->tpl_vars['proveedor']->value->{'direccion'};
}?>">
					</div>
				</div>
			</div>
			<div class="row row-formulario">
				<div class="col-md-8 workspace">
					<div class="form-group">
					    <label for="txtDistrito">Distrito</label><label id="idDistrito" class="oculto"><?php if (isset($_smarty_tpl->tpl_vars['proveedor']->value->{'distrito_id'})) {
echo $_smarty_tpl->tpl_vars['proveedor']->value->{'distrito_id'};
}?></label>
					    <input type="text" class="form-control mootools" id="txtDistrito" placeholder="Distrito , Provincia, Departamento" operacion="EscribirAutoComplete" objeto_autocomplete="autocompleteDistritos" value="<?php if (isset($_smarty_tpl->tpl_vars['nombre_distrito']->value)) {
echo $_smarty_tpl->tpl_vars['nombre_distrito']->value;
}?>">
					    <ul id="autoDistrito" class="oculto sugerencia-contenedor"></ul>
					</div>
				</div>
				<div class="col-md-4 workspace">
					<div class="form-group">
						<button class="btn btn-app" id="btnGuardarEmpresa"> <i class="fa fa-check" style="margin-right:5px"></i>Guardar Cambios</button>
					</div>
				</div>
			</div>
		</fieldset>
	</form>
</div>
<div class="col-md-4 workspace">
	<form action="#" class="sky-form">
		<header>Anexo - Imágenes del Proveedor</header>
		<fieldset>
			
		</fieldset>
	</form>
</div><?php }
}
