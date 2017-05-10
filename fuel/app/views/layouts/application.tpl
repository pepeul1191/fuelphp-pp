<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
      <title>{if isset($title)}{$title}{else}Aplicaction{/if}</title>
      <link rel="icon" type="image/x-icon" href="{Url::statics()}assets/site/img/favicon.ico">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script type="text/javascript">var BASE_URL = '{Url::base_url()}';</script>
      <!-- Inicio CSS-->
      <link rel="stylesheet" type="text/css" href="{Url::statics()}bower_components/bootstrap/dist/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="{Url::statics()}bower_components/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="{Url::statics()}bower_components/unify-pp/css/styles.css" />
      {if isset($csss)}{Helper::load_css($csss)}{/if}
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
        <a class="logo" href="{Url::base_url()}">
          <img src="{Url::statics()}bower_components/unify-pp/img/logo1-default.png" alt="Logo">
        </a>
        <!-- End Logo -->
        <!-- Topbar -->
        <div class="topbar">
          <ul class="loginbar pull-right">
            <li><a href="{Url::base_url()}login/ver">Pepe Valdivia</a></li>
            <li class="topbar-devider"></li>
            <li><a href="page_faq.html">Ayuda</a></li>
            <li class="topbar-devider"></li>
            <li><a href="{Url::base_url()}login/cerrar">Salir</a></li>
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
              {Helper::menu_modulos($modulo)}
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
         <h1 class="pull-left">{if isset($titleForm)}{$titleForm}{/if}</h1>
        <ul class="pull-right breadcrumb">
          {if isset($rutaForm)}{$rutaForm}{/if}
        </ul>
      </div>
    </div>
     <!-- Fin Breadcrumbs -->  
        <div class="container content">
            <div class="col-md-3" id="menu-side">
              {Helper::menu_submodulos($modulo)}
            </div>
            <div class="col-md-9" id="workspace">
                <!-- Inicio Yield-->
              {include file=$partial}
              <!-- Fin Yield-->
            </div>
        </div>
        <div class="footer-v1" >
        <div class="footer">
        <div class="container">
          <div class="row">
            <!-- About -->
            <div class="col-md-3 md-margin-bottom-40">
              <a href="index.html"><img id="logo-footer" class="footer-logo" src="{Url::statics()}bower_components/unify-pp/img/logo2-default.png" alt=""></a>
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
      <script src="{Url::statics()}bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
      <script src="{Url::statics()}bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="{Url::statics()}bower_components/underscore/underscore-min.js" type="text/javascript"></script>
      <script src="{Url::statics()}bower_components/swp-plugins/assets/js/mootools-core.min.js" type="text/javascript"></script>
      <script src="{Url::statics()}bower_components/swp-plugins/assets/js/mootools.min.js" type="text/javascript"></script>
      <script src="{Url::statics()}bower_components/swp-plugins/assets/js/mootools-interfaces.min.js" type="text/javascript"></script>
      <script src="{Url::statics()}bower_components/unify-pp/js/app.js" type="text/javascript"></script>
      {if isset($jss)}{Helper::load_js($jss)}{/if}
      <!-- Fin JS-->
    </body>
</html>