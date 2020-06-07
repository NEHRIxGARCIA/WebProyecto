
          
    
<?php

   
    
//var_dump($_POST);
$nombre= $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$licenciatura= $_POST["licenciatura"];
$semestre= $_POST["semestre"];
$matricula= $_POST["matricula"];
$correo= $_POST["correo"];
$contra= $_POST["contra"];

$mysqli = new mysqli("localhost", "root", "", "registros");


if ($mysqli->connect_errno)
    {
    echo "Falló la conexión: ". $mysqli->connect_error;
    exit();
    }


if ($mysqli->query("INSERT INTO alumnos VALUES (null,'$nombre','$apellidos','$licenciatura','$semestre','$matricula','$correo','$contra')"))
    { 
     
  echo '<script language="javascript">alert("ALUMNO REGISTRADO");</script>';
    
    }
    else{
      echo "error: ". $mysqli->connect_error;  
    }
      
    
    
    ?>
        

<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=http://localhost/final_pro/index.php">
