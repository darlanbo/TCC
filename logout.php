<?php

    $name = $_COOKIE['login']; 
    unset($_COOKIE['login']);

    if(!isset($_COOKIE['login'])){
        echo $name." você foi deslogado com sucesso!";
    }
?>
