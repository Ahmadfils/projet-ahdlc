<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion / Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="auth.css" />
</head>


<body>
    <div class="auth-wrapper">
        <div class="auth-image"></div>
        <div class="auth-form-container">
            <div class="toggle-buttons">
                <button class="toggle-btn active" data-toggle="login">Connexion</button>
                <button class="toggle-btn" data-toggle="register">Inscription</button>
            </div>
            <form class="auth-form login-form active">
                <input type="email" placeholder="Email" required />
                <input type="password" placeholder="Mot de passe" required />
                <button type="submit">Se connecter</button>
            </form>
            <form class="auth-form register-form">
                <input type="text" placeholder="Nom complet" required />
                <input type="email" placeholder="Email" required />
                <input type="password" placeholder="Mot de passe" required />
                <button type="submit">S’inscrire</button>
            </form>
        </div>
    </div>
    <script src="auth.js" defer></script>
</body>

</html>