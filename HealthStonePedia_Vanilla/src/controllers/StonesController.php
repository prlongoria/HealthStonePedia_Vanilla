<?php
namespace App\controllers;
use App\Models\Stones;
use App\Core\View;

class StonesController {
        
    public function __construct() {
        $this -> index();  //pongo this para que busque a index() dentro de la clase StonesController, lo automatizo con este constructor, porque no quiero que se pare en el cotrolador.Cada vez que hago un new StonesController lo que ejecuta es al contructor, no a la función index, a esta la ejecuta el constructor
    }

    public function index () {  //por defecto, index es el método que en php hace el Read del Crud
        $stone = new Stones();    //para que el controlador hable con el modelo
        $stones = $stone -> all(); //función que debo crear para que me traiga todo, aquí le digo al método index que ejecute al metodo all.

        new View ("stonelist", ["stone" =>$stones]);  //creo esta vista para que el controlador que ya tiene los datos se los pase a esta vista, en este caso lo voy a hacer a traves el Core que voy a crear y en él creo el archivo View.php
    }
    
}