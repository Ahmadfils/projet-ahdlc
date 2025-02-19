<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once 'includes/navigation.php'; ?>
    
    <div class="container">
        <section class="contact-page">
            <h1>Contactez-nous</h1>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Nos Coordonnées</h3>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>123 Rue Example, 75000 Paris</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <p>+33 1 23 45 67 89</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <p>contact@ahdlc.com</p>
                    </div>
                </div>
                
                <form class="contact-form" method="POST" action="">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Envoyer</button>
                </form>
            </div>
        </section>
    </div>

    <?php require_once 'includes/footer.php'; ?>
</body>
</html>