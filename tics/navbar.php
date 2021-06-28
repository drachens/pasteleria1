<header class="header">
    <nav class="navbar navbar-expand navbar-light bg-light">
      <a class="navbar-brand" href="inicio.php">Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <div class="text-align-center form-inline my-2 my-lg-0">
        <p class="my-2 my-sm-0 mr-3 font-italic">Bienvenido, <?php print($_SESSION["nombreUs"]) ?></p>
        <a href="perfil.php"><button class="btn btn-secondary my-2 my-sm-0">Mi Cuenta</button></a>
    </div>
      </div>
    </nav>
  </header>