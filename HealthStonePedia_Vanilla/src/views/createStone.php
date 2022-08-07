<?php 
    require_once("Components/layout.php");    
?>

<body id="bodyForCreateUser">
    <?php
        require_once("Components/Header.php");
    ?>
<!-- <section id="formNewAdventure"> -->
<form class="row g-3 formCreate" id="form" action='?action=store' method="POST">

            <div class="col-md-6">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="name" class="form-control" id="inputName" name="">
            </div>
            <div class="col-md-6">
            <label for="inputPhone" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="inputPhone">
            </div>
            <div class="col-12">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputEmail" placeholder="Tu email habitual">
            </div>
            <div class="col-12">
            <label for="inputPeople" class="form-label">Nº de personas:</label>
            <input type="text" class="form-control" id="inputPeople">
            </div>
            <div class="col-md-6">
            <label for="inputInfo" class="form-label">Observaciones:</label>
            <input type="text" class="form-control" id="inputInfo">
            </div>
            
        </form>
        <div class="col-12" id="submitButton">
            <button type="submit" class= "submitButton btn btn-primary">Aceptar</button>
        </div>
        <div class="col-12" id="deleteButton">
                <button type="reset" class="deleteButton btn btn-primary">Borrar formulario</button>
            </div>
        
    <!-- </section> -->
       
</body>