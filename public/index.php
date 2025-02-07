<?php
require_once('../core/BaseController.php');
require_once('../core/Router.php');
require_once('../core/Route.php');
// index.php
require_once __DIR__ . '/../app/controllers/authController..php';


require_once '../app/controllers/AdminController.php';

require_once('../app/config/db.php');


$router = new Router();



Route::setRouter($router);


Route::get('/signUp',function() {
       
         $controller = new AuthController();
        return $controller->showSign();
     }); 
Route::post('/signUp', [AuthController::class, 'handleSignUp']);  


// Dans ton fichier de routage
Route::post('/liste', [AdminController::class, 'updated']);

 
 
Route::get('/liste', [adminController::class, 'getEtudiant']); 
Route::post('/liste', [adminController::class, 'removed']); 

Route::get('/login', [AuthController::class, 'showlogin']); 
Route::post('/login', [AuthController::class, 'handlelogin']);  
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

