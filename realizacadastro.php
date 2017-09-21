<?php
session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
 if (!isset ($_SESSION['usuario'])){
 	$_SESSION['usuario'] = array();
 }
array_push($_SESSION['usuario'], [$usuario, $senha]);
header('location:login.php');
?>