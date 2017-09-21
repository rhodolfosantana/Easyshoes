<?php
session_start();
 $marca = $_POST['marca'];
 $modelo = $_POST['modelo'];
 $duracao = $_POST['duracao'];
 $cor = $_POST['cor'];
 $quantidade = $_POST['quantidade'];
array_push($_SESSION['sapatos'], [$marca, $modelo, $duracao, $cor, $quantidade]);
 header('location:paginaprincipal.php');
?>
