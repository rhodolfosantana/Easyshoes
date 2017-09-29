<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
</head>
<body>
	<div>
	<form action="check_login.php" method="POST">
			<img src="imagens/logo.jpg">
			<h1>Login:</h1>
	       Usuário ou Email<input type="text" name="login">
	       Senha <input type="password" name="senha"> <br><br>
	        <input class="button" type="submit" value="Logar"> 
	    </form>
	    <h1>Não é cadastrado(a)?</h1>
	    <a class="button" href="register_user.php">Cadastre-se!</a>
	</div>
</body>
</html>
