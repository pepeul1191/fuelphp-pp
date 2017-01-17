<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
      <title>{if isset($title)}{$title}{else}Aplicaction{/if}</title>
      <link rel="icon" type="image/x-icon" href="{Url::statics()}assets/site/img/favicon.ico">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Inicio CSS-->
      <link rel="stylesheet" type="text/css" href="{Url::statics()}bower_components/bootstrap/dist/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="{Url::statics()}bower_components/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="{Url::statics()}bower_components/bootstrap-redmine/assets/css/style.css" />
      {if isset($csss)}{Helper::load_css($csss)}{/if}
      <!-- Fin CSS-->
    </head>
    <body>
      <header>
          <div class="row panel-app">
            <ul class="lista-header list-inline pull-left">
                <li><a href="{Url::base_url()}">Home</a></li>
                <li><a href="news.asp">Ayuda</a></li>
            </ul> 
            <ul class="lista-header list-inline pull-right">
              <li><a href="{Url::base_url()}login/ver">Pepe Valdivia</a></li>
              <li><a href="{Url::base_url()}login/cerrar">Salir</a></li>
            </ul> 
          </div>
          <div class="row titulo-app">
            <h1 class="pull-left">Application</h1>
          </div>
          <div class="row modulos-app">
            <ul class="lista-modulos list-inline pull-left">
                {Helper::menu_modulos($modulo)}
            </ul> 
          </div>
      </header>
        <div class="body-app">
            <div class="col-md-12" id="workspace">
              <!-- Inicio Yield-->
              {include file=$partial}
              <!-- Fin Yield-->
            </div>
        </div>
        <footer>
        footer
       </footer>
       <!-- Inicio JS-->
      <script src="{Url::statics()}bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
      <script src="{Url::statics()}bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="{Url::statics()}bower_components/underscore/underscore-min.js" type="text/javascript"></script>
      <script src="{Url::statics()}bower_components/swp-plugins/assets/js/mootools-core.min.js" type="text/javascript"></script>
      <script src="{Url::statics()}bower_components/swp-plugins/assets/js/mootools.min.js" type="text/javascript"></script>
      <script src="{Url::statics()}bower_components/swp-plugins/assets/js/mootools-interfaces.min.js" type="text/javascript"></script>
      <script src="{Url::statics()}assets/site/js/app.js" type="text/javascript"></script>
      {if isset($jss)}{Helper::load_js($jss)}{/if}
      <!-- Fin JS-->
    </body>
</html>