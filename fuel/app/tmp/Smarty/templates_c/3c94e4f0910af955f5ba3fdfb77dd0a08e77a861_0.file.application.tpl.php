<?php
/* Smarty version 3.1.31, created on 2017-05-23 20:32:22
  from "/home/pepe/Documentos/php/fuel/fuel/app/views/layouts/application.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5924e2a64ef165_44824011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c94e4f0910af955f5ba3fdfb77dd0a08e77a861' => 
    array (
      0 => '/home/pepe/Documentos/php/fuel/fuel/app/views/layouts/application.tpl',
      1 => 1494358458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5924e2a64ef165_44824011 (Smarty_Internal_Template $_smarty_tpl) {
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
      <?php echo '<script'; ?>
 type="text/javascript">var BASE_URL = '<?php echo Url::base_url();?>
';<?php echo '</script'; ?>
>
      <!-- Inicio CSS-->
      <link rel="stylesheet" type="text/css" href="<?php echo Url::statics();?>
bower_components/bootstrap/dist/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo Url::statics();?>
bower_components/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo Url::statics();?>
bower_components/unify-pp/css/styles.css" />
      <?php if (isset($_smarty_tpl->tpl_vars['csss']->value)) {
echo Helper::load_css($_smarty_tpl->tpl_vars['csss']->value);
}?>
      <!-- Fin CSS-->
    </head>
    <body>
     <!-- Inicio Modal -->
    <button type="button" class="btn btn-primary btn-lg oculto" data-toggle="modal" data-target="#modal-container"  id="btnModal" >Launch demo modal</button>
    <div class="modal fade" id="modal-container" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"></div>
    <!-- Fin Modal -->
      <header>
          <!-- Inicio Header -->
          <div class="header">
      <div class="container">
        <!-- Logo -->
        <a class="logo" href="<?php echo Url::base_url();?>
">
          <img src="<?php echo Url::statics();?>
bower_components/unify-pp/img/logo1-default.png" alt="Logo">
        </a>
        <!-- End Logo -->
        <!-- Topbar -->
        <div class="topbar">
          <ul class="loginbar pull-right">
            <li><a href="<?php echo Url::base_url();?>
login/ver">Pepe Valdivia</a></li>
            <li class="topbar-devider"></li>
            <li><a href="page_faq.html">Ayuda</a></li>
            <li class="topbar-devider"></li>
            <li><a href="<?php echo Url::base_url();?>
login/cerrar">Salir</a></li>
          </ul>
        </div>
        <!-- End Topbar -->

        <!-- Toggle get grouped for better mobile display -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="fa fa-bars"></span>
        </button>
        <!-- End Toggle -->
      </div><!--/end container-->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
        <div class="container">
          <ul class="nav navbar-nav">
              <?php echo Helper::menu_modulos($_smarty_tpl->tpl_vars['modulo']->value);?>

            <li>
              <i class="search fa fa-search search-btn"></i>
              <div class="search-open">
                <div class="input-group animated fadeInDown">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn-u" type="button">Go</button>
                  </span>
                </div>
              </div>
            </li>
            <!-- End Search Block -->
          </ul>
        </div><!--/end container-->
      </div><!--/navbar-collapse-->
    </div>
    </header>
      <!-- Fin Header -->  
       <!-- Inicio Breadcrumbs -->  
      <div class="breadcrumbs">
      <div class="container">
         <h1 class="pull-left"><?php if (isset($_smarty_tpl->tpl_vars['titleForm']->value)) {
echo $_smarty_tpl->tpl_vars['titleForm']->value;
}?></h1>
        <ul class="pull-right breadcrumb">
          <?php if (isset($_smarty_tpl->tpl_vars['rutaForm']->value)) {
echo $_smarty_tpl->tpl_vars['rutaForm']->value;
}?>
        </ul>
      </div>
    </div>
     <!-- Fin Breadcrumbs -->  
        <div class="container content">
            <div class="col-md-3" id="menu-side">
              <?php echo Helper::menu_submodulos($_smarty_tpl->tpl_vars['modulo']->value);?>

            </div>
            <div class="col-md-9" id="workspace">
                <!-- Inicio Yield-->
              <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['partial']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

              <!-- Fin Yield-->
            </div>
        </div>
        <div class="footer-v1" >
        <div class="footer">
        <div class="container">
          <div class="row">
            <!-- About -->
            <div class="col-md-3 md-margin-bottom-40">
              <a href="index.html"><img id="logo-footer" class="footer-logo" src="<?php echo Url::statics();?>
bower_components/unify-pp/img/logo2-default.png" alt=""></a>
              <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
              <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
            </div><!--/col-md-3-->
            <!-- End About -->

            <!-- Latest -->
            <div class="col-md-3 md-margin-bottom-40">
              <div class="posts">
                <div class="headline"><h2>Latest Posts</h2></div>
                <ul class="list-unstyled latest-list">
                  <li>
                    <a href="#">Incredible content</a>
                    <small>May 8, 2014</small>
                  </li>
                  <li>
                    <a href="#">Best shoots</a>
                    <small>June 23, 2014</small>
                  </li>
                  <li>
                    <a href="#">New Terms and Conditions</a>
                    <small>September 15, 2014</small>
                  </li>
                </ul>
              </div>
            </div><!--/col-md-3-->
            <!-- End Latest -->

            <!-- Link List -->
            <div class="col-md-3 md-margin-bottom-40">
              <div class="headline"><h2>Useful Links</h2></div>
              <ul class="list-unstyled link-list">
                <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
                <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
                <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
              </ul>
            </div><!--/col-md-3-->
            <!-- End Link List -->

            <!-- Address -->
            <div class="col-md-3 map-img md-margin-bottom-40">
              <div class="headline"><h2>Contact Us</h2></div>
              <address class="md-margin-bottom-40">
                25, Lorem Lis Street, Orange <br>
                California, US <br>
                Phone: 800 123 3456 <br>
                Fax: 800 123 3456 <br>
                Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
              </address>
            </div><!--/col-md-3-->
            <!-- End Address -->
          </div>
        </div>
      </div><!--/footer-->

      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>
                2015 © All Rights Reserved.
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
              </p>
            </div>

            <!-- Social Links -->
            <div class="col-md-6">
              <ul class="footer-socials list-inline">
                <li>
                  <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                    <i class="fa fa-skype"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                    <i class="fa fa-pinterest"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <!-- End Social Links -->
          </div>
        </div>
      </div><!--/copyright-->
    </div>
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
bower_components/unify-pp/js/app.js" type="text/javascript"><?php echo '</script'; ?>
>
      <?php if (isset($_smarty_tpl->tpl_vars['jss']->value)) {
echo Helper::load_js($_smarty_tpl->tpl_vars['jss']->value);
}?>
      <!-- Fin JS-->
    </body>
</html><?php }
}
