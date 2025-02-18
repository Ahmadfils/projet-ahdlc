<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/nav.php'); ?>

    <div class="contact-container">
        <h1>Contactez-nous</h1>
        <p>Pour toute question ou demande, n'hésitez pas à nous contacter via le formulaire ci-dessous.</p>

        <form action="submit_contact.php" method="POST">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Envoyer</button>
        </form>

        <div class="contact-info">
            <h2>Informations de contact</h2>
            <p>Email: contact@example.com</p>
            <p>Téléphone: +33 1 23 45 67 89</p>
        </div>
    </div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>