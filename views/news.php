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
        <section class="news-page">
            <h1>Actualités</h1>
            <div class="news-grid">
                <article class="news-item">
                    <img src="<?php echo BASEURL; ?>/public/images/news1.jpg" alt="Actualité 1">
                    <h3>Titre de l'actualité 1</h3>
                    <p>Lorem ipsum dolor sit amet...</p>
                    <a href="#" class="read-more">Lire la suite</a>
                </article>
                <!-- Add more news items -->
            </div>
        </section>
    </div>

    <?php require_once 'includes/footer.php'; ?>
</body>
</html>