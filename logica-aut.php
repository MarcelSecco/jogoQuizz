<?php 
function redireciona($pagina){
    if(empty($pagina)){
        $pagina = "index.php";
    }
    header("Location: ". $pagina);
}

?>

