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
					    <input type="text" class="form-control" id="txtRazonSocial"  {if $disable == true}disabled{/if} value="{if isset($proveedor->{'razon_social'})}{$proveedor->{'razon_social'}}{/if}">
					</div>
				</div>
				<div class="col-md-4 workspace">
					<div class="form-group">
					    <label for="txtRuc">RUC</label>
					    <input type="text" class="form-control" id="txtRuc"  {if $disable == true}disabled{/if} value="{if isset($proveedor->{'ruc'})}{$proveedor->{'ruc'}}{/if}">
					</div>
				</div>
			</div>
			<div class="row row-formulario">
				<div class="col-md-12 workspace">
					<div class="form-group">
					    <label for="txtDireccion">Dirección</label>
					    <input type="text" class="form-control" id="txtDireccion"  {if $disable == true}disabled{/if} value="{if isset($proveedor->{'direccion'})}{$proveedor->{'direccion'}}{/if}">
					</div>
				</div>
			</div>
			<div class="row row-formulario">
				<div class="col-md-8 workspace">
					<div class="form-group">
					    <label for="txtDistrito">Distrito</label><label id="idDistrito" class="oculto">{if isset($proveedor->{'distrito_id'})}{$proveedor->{'distrito_id'}}{/if}</label>
					    <input type="text" class="form-control mootools" id="txtDistrito" placeholder="Distrito , Provincia, Departamento" operacion="EscribirAutoComplete" objeto_autocomplete="autocompleteDistritos" {if $disable == true}disabled{/if} value="{if isset($nombre_distrito)}{$nombre_distrito}{/if}">
					    <ul id="autoDistrito" class="oculto sugerencia-contenedor"></ul>
					</div>
				</div>
				<div class="col-md-4 workspace">
					<div class="form-group">
						<button class="btn btn-app" id="btnGuardarEmpresa" {if $disable == true}disabled{/if}> <i class="fa fa-check" style="margin-right:5px"></i>Guardar Cambios</button>
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
			<div class="col-md-12">
				<div class="row">
				<label class="texto-der" id="txtMensajeRptaImagenes"></label>
					<div class="col-md-12">
					    <label class="control-label">DNI</label><label id="imagen_dni_id" class="oculto">{if isset($imgen_dni->{'id'})}{$imgen_dni->{'id'}}{/if}</label>
						<input type="file" id="input_file_dni" name="myFile" type="file" class="" {if $disable == true}disabled{/if}/>
					</div>
					<div class="col-md-12" style="margin-top: 10px">
						<button id="upload_file_dni" class="btn btn-app pull-left" {if $disable == true}disabled{/if}><i class="fa fa-upload" aria-hidden="true" style="margin-right:5px"></i>Subir Archivo</button>
						<a href="{if isset($imgen_dni->{'ruta_documento'})}http://{Url::get_service('ftp')}/{$imgen_dni->{'ruta_documento'}}{else}'#'{/if}"  target="_blank" id="view_file_dni" class="btn btn-app pull-left {if !isset($imgen_dni->{'ruta_documento'})}oculto{/if}" style="margin-left:10px"><i class="fa fa-search" aria-hidden="true" style="margin-right: 5px"></i>Ver Archivo</a>
						<progress id="progbar_dni" value="0" min="0" max="100" class="oculto" role=""></progress>
					</div>
				</div>
			</div>
			<div class="col-md-12 hr"></div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
					    <label class="control-label">RUC</label><label id="imagen_ruc_id" class="oculto">{if isset($imgen_ruc->{'id'})}{$imgen_ruc->{'id'}}{/if}</label>
						<input type="file" id="input_file_ruc" name="myFile" type="file" class="" {if $disable == true}disabled{/if}/>
					</div>
					<div class="col-md-12" style="margin-top: 10px">
						<button id="upload_file_ruc" class="btn btn-app pull-left" {if $disable == true}disabled{/if}><i class="fa fa-upload" aria-hidden="true" style="margin-right:5px"></i>Subir Archivo</button>
						<a href="{if isset($imgen_dni->{'ruta_documento'})}http://{Url::get_service('ftp')}/{$imgen_dni->{'ruta_documento'}}{else}'#'{/if}" target="_blank" id="view_file_ruc" class="btn btn-app pull-left {if !isset($imgen_dni->{'ruta_documento'})}oculto{/if}" style="margin-left:10px"><i class="fa fa-search" aria-hidden="true" style="margin-right:5px"></i>Ver Archivo</a>
						<progress id="progbar_ruc" value="0" min="0" max="100" class="oculto" role=""></progress>
					</div>
				</div>
			</div>
		</fieldset>
	</form>
</div>