<?php
    session_start();

    class Conectar{
        protected $dbh;

        function Conexion(){
            try{
                $conectar = new PDO("mysql:host=localhost;port=3307;dbname=helpdesk", "root", "");
                //mysqli_select_db($conectar, "helpdesk");s
                return $conectar;
            }   catch (Exception $e) {
                print "Error BD! " . $e->getMessage()."<br/>";
                die();
            }
        }


        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public function ruta(){
            return "http://localhost:80/PERSONAL_HELPDESK";
        }
    }

?>


