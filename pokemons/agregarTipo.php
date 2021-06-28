    <?php
    $codigo_tipo=$_POST["codigo_tipo"];
    $nombre = $_POST["name_tipo"];
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
    $sql = "INSERT INTO tipos (codigo_tipo, nombre)
VALUES ($codigo_tipo, '$nombre')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: index.php');
    ?>