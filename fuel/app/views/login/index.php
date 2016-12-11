<div class="loginmodal-container">
     <h1>Bienvenido</h1><br>
     <form accept-charset="UTF-8" action="<?php echo Url::base_url() ?>login/acceder" method="post">
        <input type="text" name="usuario" placeholder="Usuario">
        <input type="password" name="contrasenia" placeholder="Contraseña">
        <?php if (isset($mensaje)){ ?><label class="color-rojo">Usario y/o contraseña incorrectos</label><?php } ?>
        <input type="submit" name="login" class="login loginmodal-submit" value="Acceder">
     </form>
     <div class="login-help">
         <label>Powered by: Software Web Perú ©</label> - <a href="http://softweb.pe/">Ir</a>
     </div>
</div>
