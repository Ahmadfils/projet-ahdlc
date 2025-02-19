<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/style.css">
</head>
<body>
    <?php require_once 'includes/navigation.php'; ?>
    
    <div class="container">
        <section class="about-page">
            <h1>À propos de AHDLC</h1>
            <div class="about-content">
                <div class="about-image">
                    <img src="<?php echo BASEURL; ?>/public/images/about.jpg" alt="À propos">
                </div>
                <div class="about-text">
                    <h2>Notre Histoire</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    
                    <h2>Notre Mission</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    
                    <h2>Nos Valeurs</h2>
                    <ul>
                        <li>Professionnalisme</li>
                        <li>Innovation</li>
                        <li>Engagement</li>
                        <li>Excellence</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <?php require_once 'includes/footer.php'; ?>
</body>
</html>