<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router; // usando o namespace do package

$router = new Router(URL_BASE);
// set namespace dos controllers
$router->namespace("Source\App");

/*
 * Controller: WEB
 * Method: homepage
 */
$router->group(null);
$router->get("/", "Web:home");

/*
 * Controller: WEB
 * Method: erros
 */
$router->group("ops");
$router->get("/{code}", "Web:erro");

$router->dispatch();

if($router->error()){
    $router->redirect("/ops/{$router->error()}");
}