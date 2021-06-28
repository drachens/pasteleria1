    <?php
    $id=$_POST["id"];
    $nombre = $_POST["nombre"];
    $nombre_tipo = $_POST["nombre_tipo"];
    $categoria = $_POST["categoria"];
    $potencia = $_POST["potencia"];
    $pp = $_POST["pp"];
    $precision = $_POST["precision"];
    $servername = "localhost";
    $database = "Pokemons";
    $username = "drachen";
    $password = "ca2eff781";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT codigo_tipo FROM tipos WHERE tipos.nombre = '$nombre_tipo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $codigo_tipO = $row["codigo_tipo"];

  }
    $sql = "INSERT INTO movimientos(id,nombre,cod_tipo,categoria,potencia,pp,`precision`)
VALUES ($id, '$nombre',$codigo_tipO,'$categoria',$potencia,$pp,$precision)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: index2.php');
    ?>