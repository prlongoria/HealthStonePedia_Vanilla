<?php 
    require_once("Components/layout.php");    
?>

<body id="bodyForCreateStone">
    <?php
        require_once("Components/Header.php");
    ?>

    
<!-- <section id="formNewAdventure"> -->
        <form class="row g-3 formCreate" id="form" action='?action=store' method="POST">

            <div class="col-md-6">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="name" class="form-control" id="inputName" name="name">
            </div>
            <div class="col-md-6">
            <label for="inputAttributes" class="form-label">Attributes</label>
            <input type="text" class="form-control" id="inputAttributes" name="attributes">
            </div>
            <div class="col-12">
            <label for="inputHealing" class="form-label">Healing</label>
            <input type="text" class="form-control" id="inputHealing" name="healing">
            </div>
            <div class="col-12">
            <label for="inputPosition" class="form-label">Position</label>
            <input type="text" class="form-control" id="inputPosition" name="position">
            </div>
            <div class="col-md-6">
            <label for="inputColor" class="form-label">Color</label>
            <input type="text" class="form-control" id="inputColor" name="color">
            </div>

            <div class="col-12" id="submitButton">
            <button type="submit" class= "submitButton btn btn-primary">Aceptar</button>
        </div>
        <div class="col-12" id="deleteButton">
                <button type="reset" class="deleteButton btn btn-primary">Borrar formulario</button>
        </div>
        <div class="col-12" id="backText">
            <a class="" href= '?action=#' role="button">VOLVER</a>
        </div>

        </form>
        

        
        
    <!-- </section> -->
       
</body>