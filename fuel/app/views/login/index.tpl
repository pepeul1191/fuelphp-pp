<div class="container content">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <form class="reg-page" action="{Url::base_url()}login/acceder" method="post">
                        <div class="reg-header">
                            <h2>Bienvenido</h2>
                        </div>

                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" placeholder="usuario" class="form-control" name="usuario">
                        </div>
                        <div class="input-group margin-bottom-20">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" placeholder="contraseña" class="form-control" name="contrasenia">
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn-u pull-right" type="submit" style="width: 100%;  margin-bottom: 15px">Ingresar</button>
                            </div>
                        </div>
                        {if isset($mensaje)}
                        <label class="color-rojo">Usario y/o contraseña incorrectos</label>
                        {/if}
                        <hr>
                        <h4>Olvidó su contraseña?</h4>
                        <p>No se preocupe, <a class="color-green" href="#">haga click aquí</a> para reenviar su contraseña.</p>
                        <a href="http://softweb.pe">Powered by: Software Web Perú ©</a>
                    </form>
                </div>
            </div><!--/row-->
        </div>