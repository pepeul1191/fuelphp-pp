<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
      <title>{if isset($title)}{$title}{else}Aplicaction{/if}</title>
      <link rel="icon" type="image/x-icon" href="{Url::statics()}assets/site/img/favicon.ico">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Inicio CSS-->
      {if isset($csss)}{Helper::load_css($csss)}{/if}
      <!-- Fin CSS-->
      <!-- Inicio JS-->
      {if isset($jss)}{Helper::load_js($jss)}{/if}
      <!-- Fin JS-->
    </head>
    <body>
      <script id="blank-template" type="text/x-handlebars-template">
            <!-- Inicio Yield Handelbars-->
            {literal}{{> yield}}{/literal}
            <!-- Fin Yield Handelbars-->
        </script>
        <script id="yield" type="text/x-handlebars-template">
            <!-- Inicio yield-->
            {include file=$partial}
            <!-- Fin yield-->
        </script>
    <script type="text/javascript">
        var BASE_URL = '{Url::base_url()}';
        var STATICS_URL  = '{Url::statics()}';
        var DATA = {if isset($data)}JSON.parse('{$data|@json_encode}'); {else}""{/if};
    </script>
    </body>
</html>