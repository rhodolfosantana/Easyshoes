<?php
    session_start();

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $_SESSION['logado'] = false;
        if (!isset($_SESSION['usuario'])) {
            $_SESSION['usuario'] = "";
        }
        if (isset($_SESSION['usuario'])) {
            foreach ($_SESSION['usuario'] as $usuario => $valor) {
                if ($login == $valor[0] || $login == $valor[1] && $senha == $valor[2]) {

                    $_SESSION['logado'] = true;
                    $_SESSION['dadousuario'] =  $valor[0];

                    header('location: paginaprincipal.php');
                } else {
                    header('location: usuarioincorreto.php');
                }
             }
        }
    
?>