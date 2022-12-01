<?php

session_start();
if(!empty($_SESSION['id'])){
    echo "Olá ".$_SESSION['nome'].", Seja Bem-vindo <br>";
    echo "<a href='Sair.php'>Sair</a>";
}else{
    $_SESSION['msg'] = "Área Restrita!";
    header("Location: login.php");
}

    