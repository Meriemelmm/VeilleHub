<?php 
 require_once (__DIR__.'/../models/user.php');

 class authController extends BaseController{
   
 private  $user;
 public function __construct() {
    $this->user =new user();
 }
 public function showSign(){
    $this->render('auth/signUp');
 }

 public function showlogin(){
    $this->render('auth/login');
 }
 



 public function  handleSignUp(){

 if(isset($_POST['inscrit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$role=$_POST['role'];
  $signup=$this->user->signUp($username,$email,$password,$role);


 }
 }
       public function handlelogin(){
    if(isset($_POST['connecter'])){
     $email=$_POST['email'];
        
    $password=$_POST['password'];
$connexion=$this->user->login($email,$password);

}
 }
 }












//  veillehub/public/index.php
// veillehub/public







?>