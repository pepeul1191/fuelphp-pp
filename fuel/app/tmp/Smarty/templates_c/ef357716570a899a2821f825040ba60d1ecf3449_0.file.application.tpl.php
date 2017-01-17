<?php
/* Smarty version 3.1.31, created on 2017-01-17 14:50:06
  from "/home/pepe/Documentos/php/fuelphp/fuel/app/views/layouts/application.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_587e756eb02d21_32531330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef357716570a899a2821f825040ba60d1ecf3449' => 
    array (
      0 => '/home/pepe/Documentos/php/fuelphp/fuel/app/views/layouts/application.tpl',
      1 => 1484682604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587e756eb02d21_32531330 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
      <title><?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {
echo $_smarty_tpl->tpl_vars['title']->value;
} else { ?>Aplicaction<?php }?></title>
      <link rel="icon" type="image/x-icon" href="<?php echo Url::statics();?>
assets/site/img/favicon.ico">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Inicio CSS-->
      <link rel="stylesheet" type="text/css" href="<?php echo Url::statics();?>
bower_components/bootstrap/dist/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo Url::statics();?>
bower_components/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo Url::statics();?>
bower_components/bootstrap-redmine/assets/css/style.css" />
      <?php if (isset($_smarty_tpl->tpl_vars['csss']->value)) {
echo Helper::load_css($_smarty_tpl->tpl_vars['csss']->value);
}?>
      <!-- Fin CSS-->
    </head>
    <body>
      <header>
          <div class="row panel-app">
            <ul class="lista-header list-inline pull-left">
                <li><a href="<?php echo Url::base_url();?>
">Home</a></li>
                <li><a href="news.asp">Ayuda</a></li>
            </ul> 
            <ul class="lista-header list-inline pull-right">
              <li><a href="<?php echo Url::base_url();?>
login/ver">Pepe Valdivia</a></li>
              <li><a href="<?php echo Url::base_url();?>
login/cerrar">Salir</a></li>
            </ul> 
          </div>
          <div class="row titulo-app">
            <h1 class="pull-left">Application</h1>
          </div>
          <div class="row modulos-app">
            <ul class="lista-modulos list-inline pull-left">
                <?php echo Helper::menu_modulos($_smarty_tpl->tpl_vars['modulo']->value);?>

            </ul> 
          </div>
      </header>
        <div class="body-app">
            <div class="col-md-9" id="workspace">
              <!-- Inicio Yield-->
              <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['partial']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

              <!-- Fin Yield-->
            </div>
            <div class="col-md-3" id="menu-side">
                <?php echo Helper::menu_submodulos($_smarty_tpl->tpl_vars['modulo']->value);?>

            </div>
        </div>
        <footer>
        footer
       </footer>
       <!-- Inicio JS-->
      <?php echo '<script'; ?>
 src="<?php echo Url::statics();?>
bower_components/jquery/dist/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo Url::statics();?>
bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo Url::statics();?>
bower_components/underscore/underscore-min.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo Url::statics();?>
swp/js/mootools-core.min.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo Url::statics();?>
swp/js/mootools.min.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo Url::statics();?>
swp/js/mootools-interfaces.min.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo Url::statics();?>
assets/site/js/app.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php if (isset($_smarty_tpl->tpl_vars['jss']->value)) {
echo Helper::load_js($_smarty_tpl->tpl_vars['jss']->value);
}?>
      <!-- Fin JS-->
    </body>
</html><?php }
}
