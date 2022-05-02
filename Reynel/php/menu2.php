<!-- INICIO CODIGO DE CABECERA - NO TOCAR -->
<div id="curva-superior"></div>
<div id="cabecera">
  <div id="logotipo">
    <a>
      <img src="img/logo.jpg" width="150" height="140">
    </a> 
    
    <H2><center><div id="publicidad">SISTEMA DE SEGUIMIENTO DE TRAMITE</div> </center> </H2>
    
  

<!-- FIN DE CODIGO DE CABECERA -->


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
   
  </div>

  <!-- Recopile los enlaces de navegación, formularios y otro contenido para alternar -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION["encargado"])):?>
      <li><a href="./index.php">Inicio</a></li>
      <li><a href="./registro_conclusion.php">Nuevo Tramite</a></li>
      <li><a href="./php/logout.php">Salir</a></li>
    <?php else:?>

      
    <?php endif;?>
    </ul>

  </div><!-- /.navbar-collapse -->
</div>
</nav>