<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "registros";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexion: ".mysqli_connect_error());
}

$matricula = $_POST["matricula"];
$contra = $_POST["contra"];


$query = mysqli_query($conn,"SELECT * FROM docentes WHERE matricula = '".$matricula."' and contra = '".$contra."'");
$query2 = mysqli_query($conn,"SELECT * FROM alumnos WHERE matricula = '".$matricula."' and contra = '".$contra."'");
$nr = mysqli_num_rows($query);
$nr2 = mysqli_num_rows($query2);
if($nr == 1)
{
	header("Location: menu_mt.php");
	//echo "Bienvenido:" .$matricula;
}
else if($nr2 == 1)
{
	header("Location: menu_al.php");
	//echo "Bienvenido:" .$matricula;
}
else if ($nr == 0 || $nr2 == 0 ) 
{
	
         echo "<script>
                alert('USUARIO Y/O CONTRASENA INCORRECTO');
                window.location= 'index.php'
    </script>";
        
       
}
	


?>