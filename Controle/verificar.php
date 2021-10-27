<?php
session_start();
if(isset($_SESSION['adm_login']) && isset($_SESSION['adm_senha'])){
    include "conexao.php";

    $usuario = $_SESSION['adm_login'];
    $senha = $_SESSION['adm_senha'];

    $sql = "Select * from tb_adm where adm_login ='$usuario' && adm_senha='$senha'";
    $resultado = mysqli_query($conexao, $sql);
    $contaRegistros = mysqli_num_rows($resultado); 
   

    if ($contaRegistros <=0){
        
        header("location:../login.php");
    }
    
}else{
    header("location:../index.php");
}

?>