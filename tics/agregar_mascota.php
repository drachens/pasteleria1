<?php
    include_once("header.php");
    include_once("navbar.php");
?>

<div class = "d-flex flex-column justify-content-center align-items-center col-12 mt-3 mb-3 ">
    <div class = "d-flex flex-column justify-content-center align-items-center bg-beige col-md-5 col-sm-12 rounded">
        <h2 class="pd-10 font-weight-bold text-uppercase">Agrega una Mascota</h2>
        <form action="redRegisterPet.php" method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="d-flex flex-row mb-4 col-12">
                <div class="col-4">
                    <div class="form-outline">
                        <input type="text" id="nombre" class="form-control" placeholder="Lucifer" name="nombre" required/>
                        <label class="form-label" for="nombre">Nombre</label>                    
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-outline">
                        <input type="number" id="edad" class="form-control" placeholder="12" name="edad" required/>
                        <label class="form-label" for="edad">Edad en meses</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-outline">
                        <input type="number" id="tamaño" class="form-control" placeholder="120" name="tamaño" required/>
                        <label class="form-label" for="tamaño">Altura en cm</label>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row mb-4 col-12">
                <div class="col-4">
                    <div class="form-outline mb-4">
                    <select class="form-control" name="sexo" required>
                        <option value="macho">Macho</option>
                        <option value="hembra">Hembra</option>
                    </select>
                    <label class="form-label" for="sexo">Sexo</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-outline mb-4">
                        <select class="form-control" name="tipo" required>
                            <option value="perro">Perro</option>
                            <option value="gato">Gato</option>
                        </select>
                        <label class="form-label" for="tipo">Tipo</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-outline mb-4">
                        <select class="form-control" name="raza" required>
                            <option value="akita">Akita</option>
                            <option value="beagle">Beagle</option>
                            <option value="boxer">Boxer</option>
                            <option value="chihuahua">Chihuahua</option>
                            <option value="pastor aleman">Pastor Aleman</option>
                            <option value="sin raza">Sin raza</option>
                        </select>
                        <label class="form-label" for="raza">Raza</label>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row mb-4 col-12">
                <div class = "col-5">
                    <div class="form-outline">
                        <select class="form-control" name="comida_p" required>
                            <option value="sin comida">Sin comida</option>
                            <option value="comida2">Comida2</option>
                            <option value="comida3">Comida3</option>
                            <option value="comida4">Comida4</option>
                        </select>
                        <label class="form-label" for="comida_p">Comida Perro</label>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center col-2">
                    <div class=" form-outline text-align-center">
                        <h4 class="text-align-center">Ó</h4>
                    </div>
                </div>
                <div class = "col-5">
                    <div class="form-outline">
                        <select class="form-control" name="comida_g" required>
                            <option value="sin comida">Sin comida</option>
                            <option value="comida2">Comida2</option>
                            <option value="comida3">Comida3</option>
                            <option value="comida4">Comida4</option>
                        </select>
                        <label class="form-label" for="comida_g">Comida Gato</label>
                    </div>
                </div>
            </div>
           <!-- <div class="d-flex flex-row mb-4 col-12">
                <div class = "col-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto"/>
                        <label class="custom-file-label" for="foto">Sube una foto</label>
                    </div>
                </div>
            </div> -->
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Agregar mascota</button>
        </form>
        <p><a class="font-weight-bold" href="mascota_menu.php">Volver a menu mascotas</a>.</p>
    </div>

 </div>
 <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<?php
    include_once("footer.php");
?>