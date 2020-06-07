<!DOCTYPE html>
<html lang="en">
<head>
	<title>PROYECTO FINAL</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="imagenes/png" href="imagenes/iconos/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="sweetalert/sweetalert2.min.css">
        
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
                    <span class="login100-form-title">
						AGENDA DE TUTORIAS
					</span>
			<div class="wrap-login100">
                            
				<div class="login100-pic js-tilt" data-tilt>
					<img src="imagenes/uvp.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="login.php" method="post">
					<span class="login100-form-title">
						INICIA SESION
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Se requierere matricula: TI41851">
                                            <input class="input100" type="text" id="matricula" name="matricula" placeholder="Matricula">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere de una contrasena">
						<input class="input100" id="contra" type="password" name="contra" placeholder="Contrasena">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="validar();">
							Iniciar Sesion
						</button>
					</div>
                                        
                                        <div class="text-center p-t-50">
                                            <a class="txt2" href="registro_mt.php">
							Crea una cuenta de docente
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

					<div class="text-center p-t-50">
                                            <a class="txt2" href="registro_al.php">
							Crea una cuenta de estudiante
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script src="sweetalert/sweetalert2.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
	<script type="text/javascript">
		$('.js-tilt').tilt({
			scale: 1.1
		});
               
             
              
          function validar(){
        
                var correo=$("#matricula").val();
                var contra=$("#contra").val();
                if(correo.trim() === "")
                {
                    $("#correo").focus();
                    show_mensaje("Ingresar Matricula","error");
                }
                else if(contra.trim() === "")
                {
                     $("#contra").focus();
                    show_mensaje("Ingresar contrasena","error");
                }
                
          }
          
           function show_mensaje(mensaje,icono)
                {
                        Swal.fire({
                            icon: icono,
                            title: mensaje,
                            showClass: {
                                popup: 'animated fadeInDown faster'
                            },
                            hideClass: {
                                popup: 'animated fadeOutUp faster'
                            }
                        });
                 } 
          
           
          
          
	</script>
	<script src="js/main.js"></script>

</body>
</html>