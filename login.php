<?php 
    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);
    $connect = mysql_connect('bdsql01.stoinacio.com.br','13100213','13100213');
    $db = mysql_select_db('13100213');
        if (isset($entrar)) {
                     
            $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("ERRO ao executar a query: ".mysql_error());
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                    die();
                }else{
                    setcookie("login",$login);
                    header("Location:index.php");
                }
        }
?>
