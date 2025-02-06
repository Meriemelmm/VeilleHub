<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="/css/style.css"> 
    <style>

</style>

</head>
<body>
    <div class="container">
        <h2>Inscription</h2>
        <form action="/signUp" method="POST">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>
            <label for="role">role</label>
          <select name="role" id="" style="width:100%; height:40px">
            <option value="Etudiant">Etudiant</option>
            <option value="admin">admin</option>
          </select>

            
            <button type="submit" name="inscrit">S'inscrire</button>
        </form>
        <p>Vous avez déjà un compte ? <a href="/login">Connectez-vous ici</a></p>
       





       

    </div>
</body>
</html>
