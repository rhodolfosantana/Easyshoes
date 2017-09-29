<?php 
session_start();
	if (!isset ($_SESSION['sapatos']) ) {
	    $_SESSION['sapatos'] = array();
	}
	$sapato = $_SESSION['sapatos'];

	if ($_SESSION['logado'] != true) {
	    header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CADASTRO</title>
		<link rel="stylesheet" type="text/css" href="css/cadastro.css">
	</head>
	<body>
		<header>
			<img src="imagens/logo.jpg" width="300px"> 
			<a href="xxx.php"> Mais Vendidos |</a>
			<a href="xxx.php"> ABCDEFG |</a>
			<a href="xxx.php"> 	Home |</a>
			Olá, <?=$_SESSION['dadousuario']?>!
			<a class="button" href="sair.php"> DESLOGAR </a>
		</header>
		<div>
			<table border= "2px solid black" align="center">
			 	<?php if ($sapato): ?>
				<h1>SAPATOS CADASTRADOS: </h1>
					<tr>
						<th> Marca </th>
						<th> Modelo </th>
						<th> Duração </th>
						<th> Cor </th>
						<th> Quantidade </th>
					</tr>
					<?php endif ?>
			        <?php 
			        if (!$sapato): ?>
			        	<h2>Nenhum Sapato Cadastrado </h2>
			        <?php endif ?>
			        <?php foreach ($sapato as $array => $dado): ?>
				            <tr>
				                <td><?=$dado[0]?></td>
				                <td><?=$dado[1]?></td>
				                <td><?=$dado[2]?></td>
				                <td><?=$dado[3]?></td>
				                <td><?=$dado[4]?></td>
				                <td><a href="delete.php?id=<?=$array?>"> Apagar Sapato </a></td>
				            </tr>
			        <?php endforeach ?>
		    </table>


		<h1>CADASTRAR NOVO SAPATO: </h1>
			<form action="processasapato.php" method="POST">
					<h2>Marca: <input type="text" name="marca"></h2>
					<h2>Modelo: <input type="text" name="modelo"></h2>
					<h2>Tamanho: <input type="tamanho" name="duracao"></h2>
					<h2>Cor: <input type="text" name="cor"></h2>
					<h2>Quantidade: <input type="text" name="quantidade"></h2>
				<input class="button" type="submit" value="CADASTRAR">
			</form>
		</div>
	</body>
</html>
