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
        <section class="action-page">
            <h1>Nos Actions</h1>
            <div class="action-grid">
                <div class="action-item">
                    <h3>Action 1</h3>
                    <p>Description de l'action...</p>
                </div>
                <!-- Add more action items -->
            </div>
        </section>
    </div>

    <?php require_once 'includes/footer.php'; ?>
</body>
</html>