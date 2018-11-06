<!DOCTYPE html>
<html>
<head>
	<title>Sistema PHP</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Importação BootStrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Importação css -->
	<link rel="stylesheet" type="text/css" href="lib/css/estilo_login.css">
	<!-- Importação Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

	<form action="control/validar_login.php" method="POST">
		<div class="container">

			<!-- ícone de login -->
			<h1 class="text-center" id="icone-login"><i class="far fa-user"></i></h1>
			<h1 class="text-center">Login</h1>
					
			<div class="form-group">
				E-mail 
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				Senha 
				<input type="password" name="senha" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" class="form-control btn btn-primary" value="Logar">
			</div>	
		</div>	
	</form>

</body>
</html>	