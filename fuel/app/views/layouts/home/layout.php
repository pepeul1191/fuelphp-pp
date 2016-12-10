<!DOCTYPE html>
<html>
    <head>
    	 <?php echo $header; ?>
    </head>
    <body>
		<!-- Inicio Navbar1-->
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href=""<%=Url.base_url%>""><i class="fa fa-home" aria-hidden="true"></i>Inicio</a></li>
                <li><a href="#">Ayuda</a></li>
              </ul>
              <ul class="nav navbar-nav pull-right">
                  <li id="li-usuario-logueado"><a href="<%=Url.base_url + 'login/ver'%>">Pepe Valdivia</a></li>
                  <li id="li-cerrar-sesion"><a href="<%=Url.base_url + 'login/cerrar'%>">Cerrar Sesión</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      <!-- Fin Navbar1-->
      <!-- Inicio Navbar2-->
      <div class="container-fluid" id="navbar-2">
          <div id="nombre-app" class="col-md-3">
              Dashboard HTML
          </div>
          <div class="col-md-9">
              <ul class="list-inline pull-right">
                  <?php echo Helper::menu_modulos($modulo); ?>
              </ul>
          </div>
      </div>
      <!-- Fin Navbar2-->
      <div class="container-fluid">
          <div class="col-md-2" id="menu-izq">
             <?php echo Helper::menu_izquierdo($modulo); ?>
          </div>
          <div class="col-md-10" id="workspace">
          		<!-- Inicio Yield-->
              <?php echo $content; ?>
              <!-- Fin Yield-->
          </div>
      </div>
        <?php echo $footer; ?>
    </body>
</html>