<?php
include "conexao.php";
require_once "usuarioRepository.php";
$repo = new usuarioRepository($conexão);

if( isset ($_POST ["salvar_usuario"]) )
$ativo =isset($_POST['Ativo'])? $_POST['Ativo']:false;
$repo->inserir($_POST['Login'],$_POST['Senha'],$-POST['Ativo']);
header('location: usuarios.php');
{
    else
}
header('location: usuarios.php');
{
    echo "Aqui vai  a logica de salvar  no banco";
}
else
{
     echo "Voce não veio pelo formulario";
}
?>
