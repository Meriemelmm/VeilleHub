<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plateforme de Gestion de Veille Pédagogique</title>
  <link rel="stylesheet" href="styles.css">
  <style>
body {
  font-family: Arial, sans-serif;
  
  margin: 0;
  padding: 0;
}

.container {
  width: 90%;
  margin: 20px auto;
  padding: 20px;
 
  border-radius: 8px solid black;
 
}

h1 {
  text-align: center;
  color: #333;
}

/* Styles du tableau */
.user-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  background-color: white;
}

.user-table th, .user-table td {
  padding: 12px;
  text-align: center;
  border: 1px solid #ddd;
}

.user-table th {
 background-color: #800080; 
  color: white;
}

.user-table tr:nth-child(even) {
  background-color: #f2f2f2;
}

.user-table tr:hover {
  background-color: #ddd;
}

/* Styles pour le statut */
.user-table td:last-child {
  font-weight: bold;
}


</style>
</head>
<body>
  <div class="container">
    <h1>Liste des Utilisateurs - Gestion de Veille Pédagogique</h1>
    <table class="user-table">
      <thead>
        <tr>
         
          <th>username</th>
          <th>email</th>
          <th>role</th>
          <th>Statut actuel</th>
          <th>Statut change </th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
        <?php   foreach($Etudiants as $Etudiant):
            ?>   
             <tr>
          <td><?php  echo $Etudiant ['username'] ?></td>
       
          <td><?php  echo $Etudiant ['email'] ?></td>
          <td><?php  echo $Etudiant ['role'] ?></td>
          <td><?php  echo $Etudiant ['status_compte'] ?></td>
          <td>
    <form action="/liste" method="POST">
        <input type="hidden" name="userid" value="<?php echo $Etudiant['id']; ?>" />
        <select name="status" id="">
            <option value="en attente">En attente</option>
            <option value="Approuver">Approuver</option>
            <option value="Rejeter">Rejeter</option>
        </select>
        <button type="submit" name="update">Modifier</button>
    </form>
</td>  <td><form action="/liste" method="POST">
                        <input type="hidden" name="userid" value="<?php echo $Etudiant['id']; ?>" />
                       
                        <button type="submit" name="remove" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                            supprimer</button>
                    </form></td>
          
        </tr>               
            <?php endforeach  ?>
        
       
       
      </tbody>
    </table>
  </div>
</body>
</html>
