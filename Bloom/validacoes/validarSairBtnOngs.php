<?php
session_start(); 

if(!isset($_SESSION['tipo_usuario'] )){
    header('Location:../telas/telaInicial.php');
  die("Acesso não autorizado. faça Login.");
}
switch($_SESSION['tipo_usuario']){
case 'ongs':
    header('Location:../telas/telaOngs.php');
    exit();
case'usuario': 
    header('Location:../telas/telaUser.php');
    exit();
case 'adm': 
    header('Location:../telas/telaAdm.php');
    exit();
default:
    header('Location:../telas/telaInicial.php');
    exit();
}
?>
