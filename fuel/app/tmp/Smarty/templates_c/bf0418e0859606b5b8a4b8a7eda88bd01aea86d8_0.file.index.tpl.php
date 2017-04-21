<?php
/* Smarty version 3.1.31, created on 2017-04-01 06:59:47
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/error/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58df963329a0c8_06134133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf0418e0859606b5b8a4b8a7eda88bd01aea86d8' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/error/index.tpl',
      1 => 1491047985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58df963329a0c8_06134133 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container content">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="error-v1">
				<span class="error-v1-title"> <?php echo $_smarty_tpl->tpl_vars['error']->value['numero'];?>
</span>
				<span><?php echo $_smarty_tpl->tpl_vars['error']->value['mensaje'];?>
</span>
				<p><?php echo $_smarty_tpl->tpl_vars['error']->value['descripcion'];?>
</p>
				<a class="btn-u btn-bordered" href="<?php echo Url::base_url();?>
">Ir al inicio</a>
			</div>
		</div>
	</div>
</div><?php }
}
