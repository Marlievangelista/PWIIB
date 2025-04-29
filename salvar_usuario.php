<?php
include "conexao.php";
require_once "usuarioRepository.php";
$repo = new usuarioRepository($conexao);

if( isset ($_POST ["salvar_usuario"]) )
{
    $ativo =isset($_POST['Ativo'])? $_POST['Ativo']:false;
    $repo->inserir($_POST['Login'],$_POST['Senha'],$_POST['Ativo']);
    header('location: usuarios.php');
}else{
   header('location: usuarios.php');
}


?>
