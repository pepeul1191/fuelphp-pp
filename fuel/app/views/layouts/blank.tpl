<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
      <title>{if isset($title)}{$title}{else}Aplicaction{/if}</title>
      <link rel="icon" type="image/x-icon" href="{Url::statics()}assets/site/img/favicon.ico">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
      <!-- Inicio CSS-->
      <link rel="stylesheet" type="text/css" href="{Url::statics()}bower_components/bootstrap/dist/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="{Url::statics()}bower_components/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="{Url::statics()}bower_components/unify-pp/css/styles.css" />
      {if isset($csss)}{Helper::load_css($csss)}{/if}
      <!-- Fin CSS-->
    </head>
    <body>
      <!-- Inicio Yield-->
      {include file=$partial}
      <!-- Fin Yield-->
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