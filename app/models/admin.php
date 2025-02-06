 <?php
 
 class admin extends user {

public function __construct( ) {
   parent::  __construct() ;

}
public function showUser(){
    $role='Etudiant';
    try{$users=$this->db->prepare("SELECT * FROM  users  WHERE role=:role");
    $users->execute([':role'=> $role]);
     return $Etudiants=$users->fetchAll(PDO::FETCH_ASSOC);

    } catch(PDOException $e){
        return " erreur".$e->getMessage();
    }
    


}
 public function remove($userid){
    try{
        $Etudiant=$this->db->prepare("DELETE  FROM users WHERE id=:userid");
        $Etudiant->execute(['userid'=>$userid]);


    }
    catch( PDOException $e){
        return " erreur".$e->getMessage();
    }
 }











 }

 ?>