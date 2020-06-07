
<!DOCTYPE html>
<html>
<head>
<title>REGISTRO DE DOCENTES</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="css/reg.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
 <link rel="stylesheet" href="sweetalert/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
</head>
<body>
	
	<div class="main-w3layouts wrapper">
		<h1>REGISTRO DE DOCENTES</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
                          
                            
				<form action="guardar_mt.php" method="post">
					<span class="text">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
					</span>
                                        <input class="text" id="nombre" type="text" name="nombre" placeholder="NOMBRE" required="">
                                        <span class="text">
							<i class="fa fa-address-card" aria-hidden="true"></i>
					</span>
                                        <input class="text" id="apellidos" type="text" name="apellidos" placeholder="APELLIDOS" required="">
                                        <span class="text">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</span>
                                        <input class="text" id="area" type="text" name="area" placeholder="AREA DE ESPECIALIDAD" required="">
                                         <span class="text">
							<i class="fa fa-sort" aria-hidden="true"></i>
					</span>
                                        <input class="text" id="complejo" type="text" name="complejo" placeholder="COMPLEJO Ej: (Kukulcan)" required="">
                                        <span class="text">
							<i class="fa fa-id-badge" aria-hidden="true"></i>
					</span>
                                        <input class="text" id="matricula" type="text" name="matricula" placeholder="MATRICULA" required="">
                                        <span class="text">
							<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
					<input class="text email" id="correo" type="email" name="correo" placeholder="CORREO ELECTRONICO" required="">
                                        <span class="text">
							<i class="fa fa-key" aria-hidden="true"></i>
					</span>
					<input class="text" id="contra" type="password" name="contra" placeholder="CONTRASENA" required="">
                                        
					<input type="submit" onclick="validar();" value="REGISTRARME">
				</form>
				
			</div>
		</div>
                
                 <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="sweetalert/sweetalert2.min.js"></script>
    
		<script type="text/javascript">
                    
                    function validar(){
        
                var nombre=$("#nombre").val();
                var apellidos=$("#apellidos").val();
                var area=$("#area").val();
                var complejo=$("#complejo").val();
                var matricula=$("#matricula").val();
                var correo=$("#correo").val();
                var contra=$("#contra").val();
                
                if(nombre.trim() === "")
                {
                    $("#nombre").focus();
                    show_mensaje("Ingresa tu nombre","error");
                }
                else if(apellidos.trim() === "")
                {
                     $("#apellidos").focus();
                    show_mensaje("Ingresa tus apellidos","error");
                }
                 else if(area.trim() === "")
                {
                     $("#area").focus();
                    show_mensaje("Ingresa tu area de especialidad","error");
                }
                 else if(complejo.trim() === "")
                {
                     $("#complejo").focus();
                    show_mensaje("Ingresa complejo de ubicacion","error");
                }
                 else if(matricula.trim() === "")
                {
                     $("#matricula").focus();
                    show_mensaje("Ingresa tu matricula","error");
                }
                 else if(correo.trim() === "")
                {
                     $("#correo").focus();
                    show_mensaje("Ingresa tu correo electronico","error");
                }
                 else if(contra.trim() === "")
                {
                     $("#contra").focus();
                    show_mensaje("Ingresa tu contrasena","error");
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
		
</body>
</html>