<?php
    namespace App;
    use PDO; //librería que me facilita los accesos, abre le puene, es decir, la conexión con DB
    use PDOException;    //son las dos librerías que voy a usar

    class Database {
        public $mysql;
        
        public function __construct(){
            try {
                $this->mysql = $this->getConection();
                //echo "Conexión Satisfactoria";
            } catch (PDOException $ex) {
                echo "Conexión Fallida: " .$ex->getMessage();
            }
        }
        private function getConection(){
            $host = "localhost";
            $user = "root";
            $pass = "";
            $database ="healthstonepedia";

            $charset ="utf-8";
            $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
            $pdo = new PDO("mysql:host={$host};dbname={$database};charset{$charset}", $user, $pass, $options);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }


    }