
<section class="banner">
    <img src="<?php echo BASE_URL; ?>/public/images/autism.png" alt="Bannière">
    <div class="overlay"></div>
    <div class="banner-text">
        <h1><?php echo Init::$settings['home_banner_intro']; ?></h1>
        <p>Une initiative pour le développement et la lutte contre le chômage.</p>
    </div>
</section>

<section class="services">
    <h2 class="section-title">Nos Qualités</h2>
    <p>Découvrez nos valeurs et engagements</p>
    <div class="qualities">
        <div class="quality">
            <i class="icon"><img src="<?php echo BASE_URL; ?>/public/images/<?php echo Init::$settings['image_qualite1']; ?>" alt=""></i>
            <h3><?php echo Init::$settings['home_quality_caption1']; ?></h3>
        </div>
        <div class="quality">
            <i class="icon"><img src="<?php echo BASE_URL; ?>/public/images/<?php echo Init::$settings['image_qualite2']; ?>" alt=""></i>
            <h3><?php echo Init::$settings['home_quality_caption2']; ?></h3>
        </div>
        <div class="quality">
            <i class="icon"><img src="<?php echo BASE_URL; ?>/public/images/<?php echo Init::$settings['image_qualite3']; ?>" alt=""></i>
            <h3><?php echo Init::$settings['home_quality_caption3']; ?></h3>
        </div>
        <div class="quality">
            <i class="icon"><img src="<?php echo BASE_URL; ?>/public/images/<?php echo Init::$settings['image_qualite4']; ?>" alt=""></i>
            <h3><?php echo Init::$settings['home_quality_caption4']; ?></h3>
        </div>
    </div>
</section>

<section class="actualites">
    <h2 class="section-title">Actualités</h2>
    <p>Les dernières nouvelles et mises à jour</p>
    <div class="news-container">
     <?php 
       foreach ($data['news'] as $new):
     ?>
        <div class="news-item">
            <img src="<?php echo BASE_URL; ?>/public/images/<?php echo $new->image_banner; ?>" alt="">
            <p><?php echo $new->intro; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <a href="#" class="voir-plus">Voir plus</a>
</section>

<section class="a-propos">
    <img src="<?php echo BASE_URL; ?>/public/images/happy.png" alt="À Propos">
    <div>
        <h1>À Propos de Nous</h1>
        <p><?php echo Init::$settings['home_about_caption'] ?>
        </p>
    </div>
</section>

<section class="domaines-intervention">
    <h2 class="section-title">Domaines d'Intervention</h2>
    <p>Nos domaines clés d'action</p>
    <div class="grid-container">
        <div class="grid-item" data-url="action">
            <h2>Actions humanitaires</h2>
            <img src="<?php echo BASE_URL; ?>/public/images/group.png" alt="">
        </div>
        <div class="grid-item" data-url="adaptation">
            <h2>Adaptation</h2>
            <img src="<?php echo BASE_URL; ?>/public/images/Tiny house-rafiki.png" alt="">
        </div>
        <div class="grid-item" data-url="employabilite">
            <h2>Employabilité des jeunes et des femmes</h2>
            <img src="<?php echo BASE_URL; ?>/public/images/Back to school-rafiki.png" alt="">
        </div>
        <div class="grid-item" data-url="developpement">
            <h2>Développement communautaire</h2>
            <img src="<?php echo BASE_URL; ?>/public/images/Emancipation of women-bro.png" alt="">
        </div>
        <div class="grid-item" data-url="domaine">
            <h2>Domaines transversaux</h2>
            <img src="<?php echo BASE_URL; ?>/public/images/helping.png" alt="">
        </div>
        <div class="grid-item" data-url="integration">
            <h2>Intégration</h2>
            <img src="<?php echo BASE_URL; ?>/public/images/business.png" alt="">
        </div>
    </div>
</section>
