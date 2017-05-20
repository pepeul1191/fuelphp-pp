<?php
/* Smarty version 3.1.31, created on 2017-05-20 12:55:59
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/administracion/empresa/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5920832f686519_44425262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc050394b6ced3b10453074cd0094a651e707eed' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/administracion/empresa/index.tpl',
      1 => 1495302938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5920832f686519_44425262 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-6 workspace">
	<form action="#" class="sky-form">
		<header>Información de la Empresa</header>
		<fieldset>
			<label class="oculto" id="idEmpresa"><?php echo $_smarty_tpl->tpl_vars['empresa']->value->{'id'};?>
</label>
			<label class="texto-der oculto" id="txtMensajeRptaEmpresa"></label>
			<div class="row row-formulario">
				<div class="col-md-8 workspace">
					<div class="form-group">
					    <label for="txtRazonSocial">Razón Social</label>
					    <input type="text" class="form-control" id="txtRazonSocial" value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->{'razon_social'};?>
">
					</div>
				</div>
				<div class="col-md-4 workspace">
					<div class="form-group">
					    <label for="txtRuc">RUC</label>
					    <input type="text" class="form-control" id="txtRuc" value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->{'ruc'};?>
">
					</div>
				</div>
			</div>
			<div class="row row-formulario">
				<div class="col-md-12 workspace">
					<div class="form-group">
					    <label for="txtDireccion">Dirección</label>
					    <input type="text" class="form-control" id="txtDireccion" value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->{'direccion'};?>
">
					</div>
				</div>
			</div>
			<div class="row row-formulario">
				<div class="col-md-8 workspace">
					<div class="form-group">
					    <label for="txtDistrito">Distrito</label><label id="idDistrito" class="oculto"><?php echo $_smarty_tpl->tpl_vars['empresa']->value->{'distrito_id'};?>
</label>
					    <input type="text" class="form-control mootools" id="txtDistrito" placeholder="Distrito , Provincia, Departamento" operacion="EscribirAutoComplete" objeto="autocompleteDistritos" value="<?php echo $_smarty_tpl->tpl_vars['nombre_distrito']->value;?>
">
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
<div class="col-md-6 workspace">
	<form action="#" class="sky-form">
		<header>Sedes</header>
		<fieldset>
			<h1>FUTURA TABLA DE SEDES CON BOTONES PARA LINKEAR SUS ALMACENES CON SU TIPO</h1>
		</fieldset>
	</form>
</div><?php }
}
