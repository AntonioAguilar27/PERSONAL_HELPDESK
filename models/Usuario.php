<?php 
    
    require_once("config/conexion.php");

    class Usuario extends Conectar{

        public function login(){
            $conectar=parent::Conexion();
           // $formate =parent::set_names();

            if(isset($_POST["enviar"])){
                
                $correo = $_POST["uso_correo"];
                $pass = $_POST["usu_pass"];
                if(empty($correo) and empty ($pass)){
                    header("Location: ".Conectar::ruta()."index.php?m=2");
                    exit();
                } else { 
                   // $sql  = "SELECT * FROM tm_usuario";
                   // $query = mysqli_query($conectar, $sql);

                   // var_dump("c fcyg");
                   // var_dump($query);
                   // exit();
                    $sql = "SELECT * FROM tm_usuario ";
                    $stmt=$conectar->prepare($sql);
                 // $stmt->bindValue(1, $correo);
                    //$stmt->bindValue(2, $pass);
                    $stmt->execute();
                    var_dump($stmt);
                    $resultado = $stmt->fetch();
                    var_dump($resultado);
                    exit();
                    if (is_array($resultado) and count($resultado) > 0){
                        $_SESSION["usu_id"] = $resultado["usu_id"]; 
                        $_SESSION["usu_nom"] = $resultado["usu_nom"]; 
                        $_SESSION["usu_ape"] = $resultado["usu_ape"]; 
                        header("Location:".Conectar::ruta()."/view/Home/index.php");
                        exit();
                    } else {
                        header("Location:".Conectar::ruta()."/index.php?m=1");
                        exit();
                    }
                }
            }
        }


    }

?>

