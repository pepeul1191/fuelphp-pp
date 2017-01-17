<!DOCTYPE html>
<html>
    <head>
       <?php echo $header; ?>
    </head>
    <body>
      <header>
          <div class="row panel-app">
            <ul class="lista-header list-inline pull-left">
                <li><a href="<?php echo Url::base_url()?>">Home</a></li>
                <li><a href="news.asp">Ayuda</a></li>
            </ul> 
            <ul class="lista-header list-inline pull-right">
              <li><a href="<?php echo Url::base_url()  . 'login/ver' ?>">Pepe Valdivia</a></li>
              <li><a href="<?php echo Url::base_url() . 'login/cerrar'?>">Salir</a></li>
            </ul> 
          </div>
          <div class="row titulo-app">
            <h1 class="pull-left">Application</h1>
          </div>
          <div class="row modulos-app">
            <ul class="lista-modulos list-inline pull-left">
                <?php echo Helper::menu_modulos($modulo); ?>
            </ul> 
          </div>
      </header>
        <div class="body-app">
            <div class="col-md-9" id="workspace">
              <!-- Inicio Yield-->
              <?php echo $content; ?>
              <!-- Fin Yield-->
            </div>
            <div class="col-md-3" id="menu-side">
                <?php echo Helper::menu_submodulos($modulo); ?>
            </div>
        </div>
        <footer>
        footer
       </footer>
       <?php echo $footer; ?>
    </body>
</html>