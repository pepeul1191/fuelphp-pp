<?php
/* Smarty version 3.1.31, created on 2017-05-11 16:32:46
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/login/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5914d87e35d2d5_64120504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93acf88bd0a2f6561f457facb03478fa5a0fe0a1' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/login/index.tpl',
      1 => 1494529520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5914d87e35d2d5_64120504 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container content">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <form class="reg-page" action="<?php echo Url::base_url();?>
login/acceder" method="post">
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
                        <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
                        <label class="color-rojo">Usario y/o contraseña incorrectos</label>
                        <?php }?>
                        <hr>
                        <h4>Olvidó su contraseña?</h4>
                        <p>No se preocupe, <a class="color-green" href="#">haga click aquí</a> para reenviar su contraseña.</p>
                        <a href="http://softweb.pe">Powered by: Software Web Perú ©</a>
                    </form>
                </div>
            </div><!--/row-->
        </div><?php }
}
