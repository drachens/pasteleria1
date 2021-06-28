<?php
    session_id("uwu");
    session_start();
    $rut = $_SESSION["rut"];
    $nombre=$_POST["nombre"];
    $edad = $_POST["edad"];
    $tamaño=$_POST["tamaño"];
    $tipo = $_POST["tipo"];
    $raza = $_POST["raza"];
    $sexo = $_POST["sexo"];
    $comida_p = $_POST["comida_p"];
    $comida_g = $_POST["comida_g"];
    $servername = "localhost";
    $database = "comedero";
    $username = "comedero";
    $password = "piermartiri";

    if($tipo == "gato"){
        $foto = "gato.jpeg";
    }
    else{
        $foto = "perro.jpg";
    }

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
       /* print($nombre);
        print($rut);
        print($edad);
        print($tamaño);
        print($tipo);
        print($raza);
        print($sexo);
        print($comida);
        print(strlen($edad));*/
        $sql_name = "SELECT * FROM mascotas WHERE nombre = '$nombre'"; //Busca nombre en base
        $result_name = $conn->query($sql_name);
        }
    if(preg_match("/^[a-zA-Z]{0,}$/",$nombre) == 0){ //Nombre sin numeros ni simbolos ni espacios
        header("Location: agregar_mascota.php?err=name");
        exit();
    }
    elseif(strlen($edad)>3 OR $edad < 1){ //Edad no mayor a 3 digitos o menor que 1 mes.
        header("Location: agregar_mascota.php?err=age");
        exit();          
    }
    elseif(strlen($tamaño)>3 OR $tamaño < 15){ //Tamaño no mayor a 3 digitos o tamaño menor a 15cm.
        header("Location: agregar_mascota.php?err=size");
        exit();
    }
    elseif($tipo == "gato" AND $raza != "sin raza"){ //Error al ingresar gato con raza de perro
        header("Location: agregar_mascota.php?err=cat");
        exit();
    }
    elseif($tipo == "perro" AND $raza == "sin raza"){ //Error al introducir perro sin raza.
        header("Location: agregar_mascota.php?err=noRaza");
        exit();            
    }
    elseif($comida_p != "sin comida" AND $comida_g != "sin comida"){ //Error al ingresar 2 comidas.
        header("Location: agregar_mascota.php?err=dosComida");
        exit();
    }
    elseif($comida_p == "sin comida" AND $comida_g == "sin comida"){ //Error al no ingresar comidas.
        header("Location: agregar_mascota.php?err=noComidas");
        exit();
    }
    elseif($comida_g != "sin comida" AND $tipo == "perro"){ //Error al ingresa un perro y comida de gato.
        header("Location: agregar_mascota.php?err=errComida1");
        exit();
    }
    elseif($comida_p != "sin comida" AND $tipo == "gato"){ //Error al ingresa un gato y comida de perro.
        header("Location: agregar_mascota.php?err=errComida2");
        exit();
    }
    elseif($result_name->num_rows > 0){
        header("Location: agregar_mascota.php?err=errRepeat");
        exit();
    }
    else{
        if($tipo == "gato"){
            $comida = $comida_g;
        }
        else{
            $comida = $comida_p;
        }
        $sql_registrar = "INSERT INTO mascotas (nombre, edad, id_comedero, tamano, rut_dueno,
        tipo, raza, sexo, comida, peso, imc, foto) 
        VALUES ('$nombre', '$edad', 0, '$tamaño', '$rut', '$tipo', '$raza', '$sexo', '$comida', 
        0.0, 0.0, '$foto')";            
    }
 if (mysqli_query($conn, $sql_registrar)) {
    echo "New record created successfully";
    header('Location: mascota_menu.php');
    } else {
        echo "Error: " . $sql . mysqli_error($conn);
    }
          
    mysqli_close($conn);

    
?>