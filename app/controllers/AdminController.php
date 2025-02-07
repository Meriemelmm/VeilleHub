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
// AdminController.php
public function updated()
{
    if (isset($_POST['update'])) {
        // Vérification que les données nécessaires sont présentes
        if (isset($_POST['userid']) && isset($_POST['status'])) {
            $userid = $_POST['userid'];
            $status = $_POST['status'];

            // Appel de la méthode validatedCompte pour mettre à jour le statut
            $this->admin->validatedCompte($status, $userid);
        } else {
            echo "Les données nécessaires ne sont pas soumises.";
        }
    } else {
        echo "Formulaire non soumis correctement.";
    }
}




}?>