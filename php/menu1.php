<nav class="navbar navbar-default" role="navigation">
<div class="container">
 <!-- Marca y alternar se agrupan para una mejor visualización móvil -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./index.php">Inicio</a>
  </div>

  <!-- Recopile los enlaces de navegación, formularios y otro contenido para alternar -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION["encargado"])):?>
      <li><a href="./consultar_tramite.php">Consultar Tramite</a></li>
      <li><a href="./login.php">Iniciar Sesion</a></li>
    <?php else:?>

      <li><a href="./php/logout.php">SALIR</a></li>
    <?php endif;?>
    </ul>

  </div><!-- /.navbar-collapse -->
</div>
</nav>