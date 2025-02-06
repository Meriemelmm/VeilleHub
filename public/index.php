<?php
require_once('../core/BaseController.php');
require_once('../core/Router.php');
require_once('../core/Route.php');
require_once __DIR__ . "/../app/controllers/authController..php";  
require_once('../app/config/db.php');


$router = new Router();


Route::setRouter($router);


Route::get('/signUp', [AuthController::class, 'showSign']); 
Route::post('/signUp', [AuthController::class, 'handleSignUp']);  

Route::get('/login', [AuthController::class, 'showlogin']); 
Route::post('/login', [AuthController::class, 'handlelogin']);  
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
