<?php
session_start();
unset($_SESSION['nome']);
require "cabecalho.php";

?>

<form action="login.php" method="POST">
    <br>
    <div class="row justify-content-center">
        <img src="img/pexels-pixabay-356079.jpg" class="w-25 h-25">
    </div>
    <div class="row justify-content-center mt-2 me-0">
        <div class="col-4">
        <h1 class="h3 mb-3 fw-normal text-white">Digite seu Nome de Usuário:</h1>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" onfocus="limpar()">
            </div>
        </div>
        <div class="row justify-content-center mt-4 mb-3">
            <div class="col-4">
                <label for="select" class="form-label">Nível:</label>
                <select class="form-select" aria-label="Default select example" name="select">
                    <option selected>Abra o menu e escolha sua opção:</option>
                    <option value="1">Iniciante</option>
                    <option value="2">Intermediário</option>
                    <option value="3">Avançado</option>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <button class="w-25 btn btn-lg btn-primary mt-3 text-white me-1 mb-4" type="submit">Entrar</button>
            <button type="reset" class="w-25 btn btn-lg btn-secondary text-white mt-3 ms-1 mb-4">Cancelar</button>
        </div>
    </div>

</form>

<?php

if (isset($_SESSION['erro'])) {
    if ($_SESSION['erro'] == true) {
?>
        <div class="alert alert-danger w-50 p-3 config" role="alert">
            <h4 class="alert-heading">Erro!</h4>
            <p><?= $_SESSION['msg'] ?></p>
        </div>
<?php
        unset($_SESSION["erro"]);
        unset($_SESSION["msg"]);
    }
}



require "footer.php"

?>