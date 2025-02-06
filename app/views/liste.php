<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plateforme de Gestion de Veille Pédagogique</title>
  <link rel="stylesheet" href="styles.css">
  <style>/* Styles généraux */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f9;
  margin: 0;
  padding: 0;
}

.container {
  width: 90%;
  margin: 20px auto;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
}

.user-table th, .user-table td {
  padding: 12px;
  text-align: center;
  border: 1px solid #ddd;
}

.user-table th {
  background-color: #4CAF50;
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

.user-table td:last-child:before {
  content: "• ";
  color: #4CAF50;
}
</style>
</head>
<body>
  <div class="container">
    <h1>Liste des Utilisateurs - Gestion de Veille Pédagogique</h1>
    <table class="user-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Sujet</th>
          <th>Date de Présentation</th>
          <th>Statut</th>
        </tr>
      </thead>
      <tbody>
        <?php   foreach($Etudiants as $Etudiant):
            ?>   
             <tr>
          <td><?php  echo $Etudiant ['username'] ?></td>
          <td><?php  echo $Etudiant ['id'] ?></td>
          <td><?php  echo $Etudiant ['email'] ?></td>
          <td><?php  echo $Etudiant ['role'] ?></td>
          <td> <form action="/liste" method="POST">
                        <input type="hidden" name="userid" value="<?php echo $Etudiant['id']; ?>" />
                       
                        <button type="submit" name="remove" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                            supprimer</button>
                    </form></td>
          
        </tr>               
            <?php endforeach  ?>
        
       
        <!-- Ajoutez d'autres lignes selon les besoins -->
      </tbody>
    </table>
  </div>
</body>
</html>
