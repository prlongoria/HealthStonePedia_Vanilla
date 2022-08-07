<?php
namespace App\controllers;
use App\Models\Stones;
use App\Core\View;

class StonesController {
        
    public function __construct() {

        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {  //le digo que verifique si existe la acción delete, y si es así, que borre los datos que corresponden al id y que regrese
            $this-> delete($_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "store")) {
            $this->store($_POST);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
            return;
        }
        if (isset($_GET["action"]) && ($_GET["action"] == "update")) {
            $this-> update($_POST, $_GET["id"]);
            return;
        }

        $this -> index();  //pongo this para que busque a index() dentro de la clase StonesController, lo automatizo con este constructor, porque no quiero que se pare en el cotrolador.Cada vez que hago un new StonesController lo que ejecuta es al contructor, no a la función index, a esta la ejecuta el constructor
    }

    public function index () {  //por defecto, index es el método que en php hace el Read del Crud
        $stone = new Stones();    //para que el controlador hable con el modelo
        $stones = $stone -> all(); //función que debo crear para que me traiga todo, aquí le digo al método index que ejecute al metodo all.

        new View ("stonelist", ["stone" =>$stones]);  //creo esta vista para que el controlador que ya tiene los datos se los pase a esta vista, en este caso lo voy a hacer a traves el Core que voy a crear y en él creo el archivo View.php
    }

    public function delete ($id) {
        $stoneHelper = new Stones();
        $stone = $stoneHelper->findById($id);
        $stone->destroy();

        $this->index();
    }

    public function create() {
        new View ("createStone");
    }

    public function store (array $request) {
        $newStone = new Stones(null, $request["name"], $request ["attributes"], $request["healing"], $request ["position"], $request["color"]);
        $newStone->save();
        $this->index();
    }

    public function edit ($id) {
        $stoneHelper = new Stones();
        $stone = $stoneHelper->findById($id);
        new View("editStone", ["stone"=>$stone]);
        
        // $this->index();
    }

    public function update (array $request, $id) {
        $stoneHelper = new Stones();
        $stone = $stoneHelper->findById($id);
        $stone->rename($request["name"], $request ["attributes"], $request["healing"], $request ["position"], $request["color"]);
        $stone->update();

        $this->index();
    }
}