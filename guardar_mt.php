
          
    
<?php

   
    
//var_dump($_POST);
$nombre= $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$area= $_POST["area"];
$complejo= $_POST["complejo"];
$matricula= $_POST["matricula"];
$correo= $_POST["correo"];
$contra= $_POST["contra"];

$mysqli = new mysqli("localhost", "root", "", "registros");


if ($mysqli->connect_errno)
    {
    echo "Falló la conexión: ". $mysqli->connect_error;
    exit();
    }


if ($mysqli->query("INSERT INTO docentes VALUES (null,'$nombre','$apellidos','$area','$complejo','$matricula','$correo','$contra')"))
    { 
     
  echo '<script language="javascript">alert("DOCENTE REGISTRADO");</script>';
    
    }
    else{
      echo "error: ". $mysqli->connect_error;  
    }
      
    
    
    ?>
        

<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=http://localhost/final_pro/index.php">
