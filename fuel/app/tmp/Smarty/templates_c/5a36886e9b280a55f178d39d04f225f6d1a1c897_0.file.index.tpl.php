<?php
/* Smarty version 3.1.31, created on 2017-01-17 16:24:34
  from "/home/pepe/Documentos/php/fuelphp/fuel/app/views/login/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_587e8b920c9a94_08770567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a36886e9b280a55f178d39d04f225f6d1a1c897' => 
    array (
      0 => '/home/pepe/Documentos/php/fuelphp/fuel/app/views/login/index.tpl',
      1 => 1484681668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587e8b920c9a94_08770567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-3 col-xs-8 col-md-offset-5 col-xs-offset-2">
        <div class="login-container animated fadeInDown">
            <div class="loginbox bg-white">
                <h3>BIENVENIDO</h3>
                <div class="loginbox-or">
                    <div class="or-line"></div>
                </div>
                <form accept-charset="UTF-8" action="<?php echo Url::base_url();?>
login/acceder" method="post" class="form">
                    <input type="text" class="form-control login-input" placeholder="Usuario" name="usuario"/>
                    <input type="password" class="form-control login-input" placeholder="Contraseña" name="contrasenia"/>
                    <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
                    <div class="logobox">
                        <label class="color-rojo">Usario y/o contraseña incorrectos</label>
                    </div>
                    <?php }?>
                    <input type="submit" name="login" class="btn btn-primary btn-block btn-login-input" value="Acceder" id="btn-login">
                    <div class="loginbox-forgot">
                        <a href="">Se olvidó su contraseña?</a>
                    </div>
                </form>
                <div class="loginbox-signup">
                    <a href="http://softweb.pe">Powered by: Software Web Perú ©</a>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
