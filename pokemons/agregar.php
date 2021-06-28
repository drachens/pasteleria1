    <?php
    $id_pokedex=$_POST["pokedex"];
    $nombre = $_POST["name"];
    $generacion = $_GET["gen"];
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
    $sql = "INSERT INTO pokemons (id_pokedex, nombre, generacion)
VALUES ($id_pokedex, '$nombre', 1)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: index.php');
    ?>