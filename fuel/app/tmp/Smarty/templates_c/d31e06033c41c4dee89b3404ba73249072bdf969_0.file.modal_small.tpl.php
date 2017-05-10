<?php
/* Smarty version 3.1.31, created on 2017-04-21 11:48:13
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/layouts/modal_small.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fa37cd141c88_83749267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd31e06033c41c4dee89b3404ba73249072bdf969' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/layouts/modal_small.tpl',
      1 => 1491338588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fa37cd141c88_83749267 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Inicio CSS Modal-->
<?php if (isset($_smarty_tpl->tpl_vars['csss_modal']->value)) {
echo Helper::load_css($_smarty_tpl->tpl_vars['csss_modal']->value);
}?>
<!-- Fin CSS Modal -->
<div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['titulo_modal']->value;?>
</h4>
      </div>
        <!-- Inicio Yield Modal-->
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['partial_modal']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <!-- Fin Yield Modal-->
    </div>
</div>
<!-- Inicio JS Modal-->
<?php if (isset($_smarty_tpl->tpl_vars['jss_modal']->value)) {
echo Helper::load_js($_smarty_tpl->tpl_vars['jss_modal']->value);
}?>
<!-- Fin JS Modal --><?php }
}
