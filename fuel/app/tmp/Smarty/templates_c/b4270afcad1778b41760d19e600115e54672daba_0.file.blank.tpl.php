<?php
/* Smarty version 3.1.31, created on 2017-01-17 17:22:49
  from "/home/pepe/Documentos/php/fuelphp/fuel/app/views/layouts/blank.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_587e9939535b84_00331390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4270afcad1778b41760d19e600115e54672daba' => 
    array (
      0 => '/home/pepe/Documentos/php/fuelphp/fuel/app/views/layouts/blank.tpl',
      1 => 1484691469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587e9939535b84_00331390 (Smarty_Internal_Template $_smarty_tpl) {
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
bower_components/bootstrap-redmine/assets/css/styles.css" />
      <?php if (isset($_smarty_tpl->tpl_vars['csss']->value)) {
echo Helper::load_css($_smarty_tpl->tpl_vars['csss']->value);
}?>
      <!-- Fin CSS-->
    </head>
    <body>
      <!-- Inicio Yield-->
      <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['partial']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

      <!-- Fin Yield-->
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
bower_components/swp-plugins/assets/js/mootools-core.min.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo Url::statics();?>
bower_components/swp-plugins/assets/js/mootools.min.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo Url::statics();?>
bower_components/swp-plugins/assets/js/mootools-interfaces.min.js" type="text/javascript"><?php echo '</script'; ?>
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
