<div class="col-md-8 workspace">
	<form action="#" class="sky-form">
		<header>Información del Proveedor</header>
		<fieldset>
			<label class="oculto" id="idProveedor">{if isset($proveedor->{'id'})}{$proveedor->{'id'}}{else}E{/if}</label>
			<label class="texto-der oculto" id="txtMensajeRptaProveedor"></label>
			<div class="row row-formulario">
				<div class="col-md-8 workspace">
					<div class="form-group">
					    <label for="txtRazonSocial">Razón Social</label>
					    <input type="text" class="form-control" id="txtRazonSocial" value="{if isset($proveedor->{'razon_social'})}{$proveedor->{'razon_social'}}{/if}">
					</div>
				</div>
				<div class="col-md-4 workspace">
					<div class="form-group">
					    <label for="txtRuc">RUC</label>
					    <input type="text" class="form-control" id="txtRuc" value="{if isset($proveedor->{'ruc'})}{$proveedor->{'ruc'}}{/if}">
					</div>
				</div>
			</div>
			<div class="row row-formulario">
				<div class="col-md-12 workspace">
					<div class="form-group">
					    <label for="txtDireccion">Dirección</label>
					    <input type="text" class="form-control" id="txtDireccion" value="{if isset($proveedor->{'direccion'})}{$proveedor->{'direccion'}}{/if}">
					</div>
				</div>
			</div>
			<div class="row row-formulario">
				<div class="col-md-8 workspace">
					<div class="form-group">
					    <label for="txtDistrito">Distrito</label><label id="idDistrito" class="oculto">{if isset($proveedor->{'distrito_id'})}{$proveedor->{'distrito_id'}}{/if}</label>
					    <input type="text" class="form-control mootools" id="txtDistrito" placeholder="Distrito , Provincia, Departamento" operacion="EscribirAutoComplete" objeto_autocomplete="autocompleteDistritos" value="{if isset($nombre_distrito)}{$nombre_distrito}{/if}">
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
</div>