<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/veillehub/public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <form action="#" method="POST">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Se connecter</button>
        </form>
        <p>Vous n'avez pas de compte ? <a href="signUp.php">Inscrivez-vous ici</a></p>
    </div>
</body>
</html>
