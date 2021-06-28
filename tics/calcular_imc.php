<?php
    $id_m = $_POST["nombreMascota"];
    include_once("conexion.php");
    $query = "SELECT tamano,peso,id_mascota FROM mascotas WHERE mascotas.id_mascota = '$id_m'";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result)){
        $tamaño = $row["tamano"];
        $peso = $row["peso"];
    }

    //peso/altura*altura
    print($id_m);
    print("22");
    $imc = $peso/($tamaño**2);
    print($imc);
    header("Location: imc_inicio.php?imc=".$imc."");
?>