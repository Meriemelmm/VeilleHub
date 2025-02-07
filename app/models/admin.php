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
 // Admin.php
public function validatedCompte($status, $userid)
{
    try {
        $updateStatus = $this->db->prepare("UPDATE users SET status_compte = :status WHERE id = :userid");
        $updateStatus->execute([':status' => $status, ':userid' => $userid]);

        header("Location: /liste?success=true");

        exit();
    } catch (PDOException $e) {
        return "Erreur : " . $e->getMessage();
    }
}












 }

 ?>