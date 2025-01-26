<?php
include "./controller/HomeController.php";
include "./core/Conexao.php";

if (isset($_GET['classe']) && isset($_GET['metodo'])) {
    $classe = $_GET['classe'];
    $metodo = $_GET['metodo'];

    $controllerFile = 'controller/'.$classe.'Controller.php';

    if (file_exists($controllerFile)) {
        include $controllerFile;
        $controllerClass = $classe.'Controller';
        $controllerInstance = new $controllerClass();

        if (method_exists($controllerInstance, $metodo)) {
            $controllerInstance->$metodo();
        }
    }
} else {
    $homeController = new HomeController();
    $homeController->index();
}
?>