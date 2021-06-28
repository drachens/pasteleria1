  <?php
    $id_pokedex=$_POST["pokedex"];
    $nombre = $_POST["nombre"];
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

$sql = "SELECT id_habilidad FROM habilidades WHERE habilidades.nombre = '$nombre'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row["id_habilidad"];

  }
}
$sql = "INSERT INTO pokemonsHabilidades (id_habilidad, id_pokedex)
VALUES ($id, $id_pokedex)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
$conn->close();
header('Location: index.php');
?> 