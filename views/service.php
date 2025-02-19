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
        <section class="services-page">
            <h1>Nos Services</h1>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Développement Web</h3>
                    <p>Création de sites web modernes et responsives</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Applications Mobiles</h3>
                    <p>Développement d'applications iOS et Android</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Conseil Digital</h3>
                    <p>Stratégie et transformation digitale</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-cogs"></i>
                    <h3>Solutions sur Mesure</h3>
                    <p>Applications personnalisées pour votre entreprise</p>
                </div>
            </div>
        </section>
    </div>

    <?php require_once 'includes/footer.php'; ?>
</body>
</html>