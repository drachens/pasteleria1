    <?php
    $id_habilidad=$_POST["id_habilidad"];
    $nombre = $_POST["nombre"];
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
    $sql = "INSERT INTO habilidades (id_habilidad, nombre)
VALUES ($id_habilidad, '$nombre')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: index.php');
    ?>