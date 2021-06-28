  <?php
    $id_pokedex=$_POST["pokedex"];
    $nombre = $_POST["name_tipo"];
    //$generacion = $_GET["gen"];
    $servername = "localhost";
    $database = "Pokemons";
    $username = "drachen";
    $password = "ca2eff781";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT codigo_tipo FROM tipos WHERE tipos.nombre = '$nombre'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row["codigo_tipo"];

  }
}
$sql = "INSERT INTO tiposPokemon (id_pokedex, codigo_tipo)
VALUES ($id_pokedex, $id)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
$conn->close();
header('Location: index.php');
?> 