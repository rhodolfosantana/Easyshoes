<?php

session_start();
$id = $_GET['id'];
unset($_SESSION['sapatos'][$id]); // remover algo de um array

header('location: paginaprincipal.php');

?>
