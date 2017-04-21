<?php
/* Smarty version 3.1.31, created on 2017-04-21 11:48:16
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/usuario/usuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fa37d02ef201_52760499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7c56f2623775325e5467c80dfbeee21977bc831' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/accesos/usuario/usuario.tpl',
      1 => 1491338588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fa37d02ef201_52760499 (Smarty_Internal_Template $_smarty_tpl) {
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
