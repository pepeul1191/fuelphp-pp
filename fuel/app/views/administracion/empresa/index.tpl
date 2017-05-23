<div class="col-md-6 workspace">
	<form action="#" class="sky-form">
		<header>Información de la Empresa</header>
		<fieldset>
			<label class="oculto" id="idEmpresa">{$empresa->{'id'}}</label>
			<label class="texto-der oculto" id="txtMensajeRptaEmpresa"></label>
			<div class="row row-formulario">
				<div class="col-md-8 workspace">
					<div class="form-group">
					    <label for="txtRazonSocial">Razón Social</label>
					    <input type="text" class="form-control" id="txtRazonSocial" value="{$empresa->{'razon_social'}}">
					</div>
				</div>
				<div class="col-md-4 workspace">
					<div class="form-group">
					    <label for="txtRuc">RUC</label>
					    <input type="text" class="form-control" id="txtRuc" value="{$empresa->{'ruc'}}">
					</div>
				</div>
			</div>
			<div class="row row-formulario">
				<div class="col-md-12 workspace">
					<div class="form-group">
					    <label for="txtDireccion">Dirección</label>
					    <input type="text" class="form-control" id="txtDireccion" value="{$empresa->{'direccion'}}">
					</div>
				</div>
			</div>
			<div class="row row-formulario">
				<div class="col-md-8 workspace">
					<div class="form-group">
					    <label for="txtDistrito">Distrito</label><label id="idDistrito" class="oculto">{$empresa->{'distrito_id'}}</label>
					    <input type="text" class="form-control mootools" id="txtDistrito" placeholder="Distrito , Provincia, Departamento" operacion="EscribirAutoComplete" objeto="autocompleteDistritos" value="{$nombre_distrito}">
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
			<label class="texto-der oculto" id="txtMensajeRpta"></label>
			<table class="list issues" style="" id="tablaSedes"></table>
		</fieldset>
	</form>
</div>