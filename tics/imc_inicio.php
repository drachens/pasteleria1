<?php
    include_once("header.php");
    $rut = $_SESSION["rut"];
    $imc = $_GET["imc"];
    $do = $_GET["cal"];
    include_once("navbar.php");
    include_once("conexion.php");
    $query = "SELECT nombre,id_mascota FROM mascotas WHERE mascotas.rut_dueno = '$rut'";
    $result = mysqli_query($conn, $query);
?>
<div class="d-flex m-5 flex-row justify-content-center text-center align-items-center mb-3 mt-3">
    <div class="col-lg-6 col-md-8 col-sm-12 my-2 bg-black3 ">
        <h2 class="font-weight-bold text-uppercase my-4">Calcula el IMC de tu mascota</h2>
        <form action="calcular_imc.php" method="POST">
            <div class="d-flex flex-column col-12 mb-4 justify-content-center align-items-center">
                <div class="col-12">
                    <select class="form-control form-control-lg" name="nombreMascota">
                        <option value="none">Elige una de tus mascotas...</option>
                    <?php 
                        while($row = mysqli_fetch_array($result)){
                    ?>
                        <option value="<?php print($row["id_mascota"]); ?>"><?php print($row["nombre"]); ?></option>
                    <?php 
                        }
                    ?>
                    </select>
                </div>
                <div class="col-6 mt-4 mb-3">
                    <button class="btn-lg btn-primary">CALCULAR</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
if($imc){
?>
<div class="d-flex m-5 flex-row justify-content-center text-center align-items-center mb-3 mt-3">
    <div class="col-lg-6 col-md-8 col-sm-12 my-2 bg-black3 ">
        <h4 class="font-weight-bold text-uppercase my-4 text-center">El IMC de tu mascota es:</h4>
        <h4 class="font-weight-bold text-uppercase my-4 text-center"><?php print($imc); ?></h4>
    </div>
<div>
<?php 
    }
    else{
?>
<div class="d-flex m-5 flex-row justify-content-center text-center align-items-center mb-3 mt-3">
    <div class="col-lg-6 col-md-8 col-sm-12 my-2 bg-black3 ">
        <h4 class="font-weight-bold text-uppercase my-4">Aun no calculas el imc.</h4>
    </div>
<div>
<?php
    }
    include_once("footer.php");
?>