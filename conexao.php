<?php
$servidor = "locallhost";
$usuario = "root";
$senha = "";
$banco ="PW _BD";

$conexão = new myqli($servidor ,$ususario,$senha, $banco);
if($conexão - connect_error){
    die("Falha na conexão:" .$conexão ->connect_error);
}
?>