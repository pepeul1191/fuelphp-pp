<?php
/* Smarty version 3.1.31, created on 2017-01-17 17:30:42
  from "/home/pepe/Documentos/php/fuelphp/fuel/app/views/accesos/usuario/usuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_587e9b12be2d67_97936249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adac826b4327be9f42ecae00f11f7d16d903e98a' => 
    array (
      0 => '/home/pepe/Documentos/php/fuelphp/fuel/app/views/accesos/usuario/usuario.tpl',
      1 => 1484692199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587e9b12be2d67_97936249 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body">
	<h5 class="subtitulo">Edite los datos del usuario seleccionado</h5>
	<div class="row" style="margin-top:10px;">
		<div class="col-md-6">
		    <div class="form-group">
			    <label for="txtUsuario">Usuario</label>
			    <input type="text" class="form-control" id="txtUsuario">
		  	</div>
	  	</div>
	  	<div class="col-md-6">
		  	<div class="form-group">
			    <label for="txtCorreo">Correo</label>
			    <input type="text" class="form-control" id="txtCorreo">
		  	</div>
	  	</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<button type="button" class="btn btn-default pull-right" id="btnGuardar"><i class="fa fa-check" aria-hidden="true"></i>Guardar Cambios</button>
		</div>
	</div>
	<h5 class="subtitulo">Cambiar contraseña</h5>
	<div class="row" style="margin-top:10px;">
		<div class="col-md-4">
		    <div class="form-group">
			    <label for="txtContraseniaAntgua">Contraseña Antigua</label>
			    <input type="text" class="form-control" id="txtContraseniaAntgua">
		  	</div>
	  	</div>
	  	<div class="col-md-4">
		  	<div class="form-group">
			    <label for="txtContraseniaNueva">Contraseña Nueva</label>
			    <input type="text" class="form-control" id="txtContraseniaNueva">
		  	</div>
	  	</div>
	  	<div class="col-md-4">
		  	<div class="form-group">
			    <label for="txtContraseniaRepita">Repita Contraseña Nueva</label>
			    <input type="text" class="form-control" id="txtContraseniaRepita">
		  	</div>
	  	</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<button type="button" class="btn btn-default pull-right" id="btnGuardar"><i class="fa fa-check" aria-hidden="true"></i>Guardar Cambios</button>
		</div>
	</div>	
</div><?php }
}
