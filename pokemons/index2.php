<!DOCTYPE html>
<html>
<head>
<title>Pokemons</title>
</head>

<body>
    <div id="pokemon" style=" margin:10px; position: relative; float: left;">
        <h5 style="position: relative;">Agregar Movimiento</h5>
        <form method="POST" action="agregarMovimiento.php">
          <label for="id">id:</label><br>
          <input type="number" id="pokedex" name="id"><br>
          <label for="nombre">Nombre:</label><br>
          <input type="text" id="name" name="nombre"><br><br>
          <label for="nombre_tipo">nombre_tipo:</label><br>
          <input type="text" id="pokedex" name="nombre_tipo"><br>
          <label for="categoria">categoria:</label><br>
          <input type="text" id="name" name="categoria"><br><br>
          <label for="potencia">Potencia:</label><br>
          <input type="number" id="pokedex" name="potencia"><br>
          <label for="pp">PP:</label><br>
          <input type="number" id="name" name="pp"><br><br>
          <label for="precision">Precision:</label><br>
          <input type="number" id="pokedex" name="precision"><br>                              
          <input type="submit" value="Submit">
        </form>
    </div>
   <footer style="position: relative; float: left; clear: left;">  
    <a href="index.php"><h2>ANTERIOR</h2></a>          
</footer>
</body>

</html> 