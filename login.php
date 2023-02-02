<?php 
session_start();
require "logica-aut.php";
$name = filter_input(INPUT_POST, "nome");
$opcao = filter_input(INPUT_POST, "select", FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION['nome'] = $name;

if(!empty($name)){
    redireciona("index.php");
}else{
    redireciona("reqNome.php");
    $_SESSION['erro'] = true;
    $_SESSION['msg'] = "Não consegui identificar um usuário, tente novamente!";
}
if($opcao == 1){
    redireciona("quizz.php?nivel=iniciante");
}elseif($opcao == 2){
    redireciona("quizz.php?nivel=intermediario");
}else{
    redireciona("quizz.php?nivel=avancado");
}

?>