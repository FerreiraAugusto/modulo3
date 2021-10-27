<?php
$servidor = "localhost";
$usuario = "root";
$senha = "augusto";
$banco= "restaurantedb";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco) or die;
if(!mysqli_set_charset($conexao,'utf8')){
    echo "erro ao inserir utf8";
}


?>