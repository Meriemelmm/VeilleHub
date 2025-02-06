<?php

 class user {
 private $user_id;
 private $username;
 private $email;
  private $password;
  private $status;
  private $role;
  protected $db ;
   public function __construct() {
    $this->db= (new  database)->getconnect();
   
   }
   public function signUp ($username,$email,$password,$role){

    try{ $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        $us = $this->db->prepare("SELECT * FROM users WHERE email = :email");
            $us->execute([':email' => $email]);
            $result = $us->fetchAll(PDO::FETCH_ASSOC);
    
            if (!empty($result)) {
                return "Cet email est déjà utilisé.";
            } else {
        $users = $this->db->prepare("INSERT INTO users (username,email,password,role) VALUES (:username,:email,:password,:role)");
    $result =$users->execute([':username'=>$username,'email'=>$email,'password'=> $passwordhash,':role'=>$role]);
 if($result){
    "inscription reussite";
    header("location:/login"); exit();
 } 
 
}}
    catch (PDOException $e ){
        return " erreur".$e->getMessage();
    }
 
   }
   public function login($email,$password){


    try{
        $users = $this->db->prepare("SELECT * FROM users
         WHERE email = :email");
      
        $users->execute([':email'=> $email]);
         $user = $users->fetch(PDO::FETCH_ASSOC);

      
        if ($user) {
            
            if (password_verify($password, $user['password'])) {
                $this->user_id = $user['id'];
                $this->email = $user['email'];
                $this->username = $user['username'];
                $this->role = $user['role'];
              
                
              
    
                $_SESSION['user_id'] = $this->user_id;
                $_SESSION['username'] = $this->username;
                $_SESSION['role'] = $this->role;
       header("location:/signUp") ;
                    exit();
               
            }

    }}
    catch(PDOException $e ){
       return " erreur".$e->getMessage();
    }

   } 

 }
















?>