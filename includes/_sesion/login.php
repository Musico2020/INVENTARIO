<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">BIENVENIDOS</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<img src="../../img/inv.png" alt="" >
		      	</div><br>
		      	<h3 class="text-center mb-4">Inicio de sesion</h3>
						<form action="validar.php" method="POST">
		      		<div class="form-group">
							<label for="username">Correo</label><br>
							<input type="text" name="correo" id="correo" class="form-control" required>
		      		</div>
	            <div class="form-group ">
							<label for="password">Contraseña</label><br>
							<input type="password" name="password" id="password" class="form-control" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	
								
	            </div>
	            <div class="form-group">
								<center>
	            	<button type="submit" class="btn btn-success btn-md space" style=width:90%;>Iniciar</button>
								</center><br>
								<center>
								<a href="registros.php"><input type="button"  class="btn btn-success btn-md space" value="Registrarse" style=width:90%;></a>
								 
								
	            </div>
							<center>
               <b><div style="color: #5a5c6946" class="animate__animated animate__bounce animate__faster" >Creado por Dilsof</div></b>   </center>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

