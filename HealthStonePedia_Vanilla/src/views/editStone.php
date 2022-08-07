<?php
require_once("Components/layout.php");
?>

<body id="bodyForUpdateStone">
    <?php
    require_once("Components/Header.php");
    ?>
    <main class="editPage">
        <section class="formUpdate">
            <form class="row g-3" id="formUpdateStone" action='?action=update&id=<?php echo $data["stone"]->getId() ?>' method="post">
                <div class="col-md-6">
                    <label for="inputName" class="form-label">Nombre</label>
                    <input type="name" class="form-control" id="inputName" name="name" required value='<?php echo $data["stone"]->getName() ?>'>
                </div>
                <div class="col-md-6">
                    <label for="inputAttributes" class="form-label">Attributes</label>
                    <input type="text" class="form-control" id="inputAttributes" name="attributes" required value='<?php echo $data["stone"]->getAttributes() ?>'>
                </div>
                <div class="col-12">
                    <label for="inputHealing" class="form-label">Healing</label>
                    <input type="text" class="form-control" id="inputHealing" name="healing" required value='<?php echo $data["stone"]->getHealing() ?>'>
                </div>
                <div class="col-12">
                    <label for="inputPosition" class="form-label">Position</label>
                    <input type="text" class="form-control" name="position" id="inputPosition" required value='<?php echo $data["stone"]->getPosition() ?>'>
                </div>
                <div class="col-md-6">
                    <label for="inputColor" class="form-label">Color:</label>
                    <input type="text" class="form-control" id="inputColor" name="color" required value='<?php echo $data["stone"]->getColor() ?>'>
                </div>

                <div class="col-12" id="deleteButton">
                    <button type="reset" class="deleteButton btn btn-primary">Borrar formulario</button>
                </div>    
                <div class="col-12" id="editSubmitButton">
                    <button type="submit" class= "submitButton btn btn-primary">Aceptar</button>
                </div>
                <div class="col-12" id="editSubmitButton">
                <a class="" href='?action=#' role="button">VOLVER</a>
                </div>       
            </form>
        </section>
    </main>
</body>