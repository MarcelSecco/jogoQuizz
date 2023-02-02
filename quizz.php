<?php
session_start();
require "logica-aut.php";
if (empty($_SESSION['nome'])) {
    redireciona("reqNome.php");
    $_SESSION['erro'] = true;
    $_SESSION['msg'] = 'Para acessar essa área é necessário se identificar antes!';
} else {
    require "cabecalho.php";
    $nivel = filter_input(INPUT_GET, "nivel", FILTER_SANITIZE_SPECIAL_CHARS);


?>
    <div class="mt-2 d-grid gap-2 col-2 mx-auto">

        <button class="btn fs-1  navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <i class="bi bi-person-circle"></i>
            <?= $_SESSION['nome'] ?>
        </button>
    </div>
    <nav class="navbar bg-dark">
        <div class="container-fluid bg-dark">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Olá, <?= $_SESSION['nome'] ?>!!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= basename($_SERVER["PHP_SELF"]) ?>" aria-label="Close">
                                <i class="bi bi-house"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-flag-fill"></i>
                                Alterar Nível
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="quizz.php?nivel=iniciante">
                                        <i class="bi bi-emoji-neutral"></i>
                                        Iniciante
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="quizz.php?nivel=intermediario">
                                        <i class="bi bi-emoji-smile"></i>
                                        Intermediário
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="quizz.php?nivel=avancado">
                                        <i class="bi bi-emoji-sunglasses"></i>
                                        Avançado
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>

    </div>





    <?php
    if ($nivel == 'iniciante') {
    ?>


        <div id="carouselExampleCaptions" class="carousel slide mt-3">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" id="div1">
                    <img src="img\pexels-ann-h-10981240.jpg" class="rounded mx-auto d-block w-50 h-25" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>Primeira questão:</h5>
                    </div>
                </div>
                <div class="carousel-item" id="div2">
                    <img src="img\pexels-ann-h-10981240.jpg" class="rounded mx-auto d-block w-50" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Segunda questão:</h5>
                    </div>
                </div>
                <div class="carousel-item" id="div3">
                    <img src="img\pexels-ann-h-10981240.jpg" class="rounded mx-auto d-block w-50" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Terceira questão:</h5>
                    </div>
                </div>
                <div class="carousel-item" id="div4">
                    <img src="img\pexels-ann-h-10981240.jpg" class="rounded mx-auto d-block w-50" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Quarta questão:</h5>
                    </div>
                </div>
                <div class="carousel-item" id="div5">
                    <img src="img\pexels-ann-h-10981240.jpg" class="rounded mx-auto d-block w-50" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Quinta questão:</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" onclick="verificarDiv()">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" onclick="verificarDiv()">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="text-white fs-4 mt-5">
            <form method="POST" action="validar.php">
                <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <p id="a">Teste para saber o tamanho se está tudo certo</p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p id="b">Teste para saber o tamanho se está tudo certo</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p id="c">Teste para saber o tamanho se está tudo certo</p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p id="d">Teste para saber o tamanho se está tudo certo</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 col-3 mx-auto mt-3 mb-3">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>







    <?php
    } elseif ($nivel == 'intermediario') {
        echo "<h1>Intermediário</h1"
    ?>

    <?php
    } elseif ($nivel == 'avancado') {
        echo "<h1>Avançado</h1"
    ?>
        
    <?php
    } else {
        redireciona("reqNome.php");
    }


    ?>


<?php
    require "footer.php";
}
?>