<?php
namespace App\Models;
use App\Database;
class Stones {
    private ?int $id;
    private string $name;    //creo las variables que habrá en la BD
    private string $attributes;
    private string $healing;
    private string $position;
    private string $color;

    private $database;
    private $table = "stones"; //la hago privada porque debo crear un modelo por cada tabla

    //debo crear un constructor para que haga automáticamente el puente con la DB cada vez que instancio 

    function __construct(int $id=null, string $name ='', string $attributes='', string $healing='', string $position='', string $color='') {   //le paso todos los datos que contiene mi DB y le indico que el id puede ser nulo y que los demás podrían estar vacíos
    
        $this->id = $id;                     //Los datos que ya recibo, se los doy a las primeras variables que creé arriba 
        $this->name = $name;
        $this->attributes = $attributes;
        $this->healing = $healing;
        $this->position = $position;
        $this->color = $color;

    
        if (!$this->database) {  //si la database aún no tiene valor, instanciará la clase Database() y debo crear esta clase en src (archivo)
            $this->database = new Database();
        }
    }

    function all() {
        $query = $this->database->mysql->query("SELECT * FROM {$this->table}"); //dentro de la BD vas a traer mysql y vas a ejecutar una query, al poner table, la hago reutilizable, ya que la he definido arriba con las variables.
        $stoneArray = $query->fetchAll();  //stoneArray es el array en bruto, en él tengo todos los datos de la BD y quiero sacarlos uno a uno y meterlos en el array vacío que voy a crear

        $stoneList = [];  //array vacío en el que meteré los datos que yo quiera de la BD

        foreach ($stoneArray as $stone){  //recorre mi array en bruto y vete sacando stone a stone de mi DB y mételo en el array vacío:
            //Cada item del array vacío, va a ser un nuevo Stones con estos datos (los que yo quiera de la BD, en este caso los he metido todos)
            $stoneItem = new Stones($stone["id"], $stone["name"], $stone["attributes"], $stone["healing"], $stone["position"], $stone["color"]);
            array_push($stoneList, $stoneItem);   //mete en el array vacío los item que le he mandado arriba
        }
        return $stoneList;  //para que haga lo que le pida cuando llamo a la función all
    }
    

}