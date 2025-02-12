<?php

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';
$controlador = ucfirst($pagina) . 'Controller';
$rutaControlador = "../Controllers/$controlador.php";

if (file_exists($rutaControlador)) {
    require $rutaControlador;
    $obj = new $controlador();
    $obj->index();
} else {
    echo "Página no encontrada.";
}
?>
