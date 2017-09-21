	<?php
	session_start();

	$filme = $_GET['filme'];
	echo $_SESSION['filmes'][$filme][0];
	?>
	<!DOCTYPE html>
	<title>DETALHES DO FILME</title>
		<link rel="stylesheet" type="text/css" href="cadastro.css">
	</head>
	<body>
		<div>
			<h1>Detalhes do Filme <?= $_SESSION['filmes'][$filme][0] ?> : </h1>
			<table border= "2px solid black" align="center">
				<tr>
					<th> Gênero </th>
					<th> Duração (MIN) </th>
					<th> Direção </th>
				</tr>
				 <tr>
	                <td><?=$_SESSION['filmes'][$filme][1]?></td>
	                <td><?=$_SESSION['filmes'][$filme][2]?></td>
	                <td><?=$_SESSION['filmes'][$filme][3]?></td>
	            </tr>
			</table>
			<br><a class="button" href="paginaprincipal.php"> Voltar À Página Principal </a>
		</div>
	</body>
	</html>