<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>

</style>
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <form action="/login" method="POST">
            <label for="username">email</label>
            <input type="text" id="username" name="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="connecter">Se connecter</button>
        </form>
        <p>Vous n'avez pas de compte ? <a href="/signUp">Inscrivez-vous ici</a></p>
    </div>
</body>
</html>
