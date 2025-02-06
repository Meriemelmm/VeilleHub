<?php

require_once (__DIR__.'/../models/admin.php');

class adminController extends BaseController{
  
private  $admin;
public function __construct() {
   $this->admin =new admin();
}

public function getEtudiant(){
  
    $Etudiants = $this->admin->showUser();
    
    
    if ($Etudiants !== null) {
       
        $this->render('liste', ['Etudiants' => $Etudiants]);
    } else {
       
        $this->render('liste', ['Etudiants' => []]);
    }
}
public function removed(){
    if(isset($_POST['remove'])){
        $userid=$_POST['userid'];
        $this->admin->remove($userid);
        header("location:/liste");
        exit();
    }
    
}


}?>