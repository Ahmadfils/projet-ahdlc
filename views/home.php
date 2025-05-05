<?php
require_once "views/includes/header.php";
?>

<section class="banner">
    <img src="public/images/autism.png" alt="Bannière">
    <div class="overlay"></div>
    <div class="banner-text">
        <h1><?php echo $data['description']; ?></h1>
        <p>Une initiative pour le développement et la lutte contre le chômage.</p>
    </div>
</section>

<section class="services">
    <h2 class="section-title">Nos Qualités</h2>
    <p>Découvrez nos valeurs et engagements</p>
    <div class="qualities">
        <div class="quality">
            <i class="icon"><img src="public/images/<?php echo $data['image_qualite1']; ?>" alt=""></i>
            <h3>Engagement</h3>
        </div>
        <div class="quality">
            <i class="icon"><img src="public/images/<?php echo $data['image_qualite2']; ?>" alt=""></i>
            <h3>Solidarité</h3>
        </div>
        <div class="quality">
            <i class="icon"><img src="public/images/<?php echo $data['image_qualite3']; ?>" alt=""></i>
            <h3>Transparence</h3>
        </div>
        <div class="quality">
            <i class="icon"><img src="public/images/<?php echo $data['image_qualite4']; ?>" alt=""></i>
            <h3>Innovation</h3>
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
            <img src="public/images/<?php echo $new->image_banner; ?>" alt="">
            <p><?php echo $new->intro; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <a href="#" class="voir-plus">Voir plus</a>
</section>

<section class="a-propos">
    <img src="public/images/happy.png" alt="À Propos">
    <div>
        <h1>À Propos de Nous</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam, laboriosam expedita.
            Quae, ex ratione dolore culpa quod perferendis nostrum,
            vitae quibusdam, temporibus nobis hic sed voluptatibus obcaecati assumenda autem. Hic.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam, laboriosam expedita.
            Quae, ex ratione dolore culpa quod perferendis nostrum,
            vitae quibusdam, temporibus nobis hic sed voluptatibus obcaecati assumenda autem. Hic.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam, laboriosam expedita.
            Quae, ex ratione dolore culpa quod perferendis nostrum,
            vitae quibusdam, temporibus nobis hic sed voluptatibus obcaecati assumenda autem. Hic.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam, laboriosam expedita.
            Quae, ex ratione dolore culpa quod perferendis nostrum,
            vitae quibusdam, temporibus nobis hic sed voluptatibus obcaecati assumenda autem. Hic.
        </p>
    </div>
</section>

<section class="domaines-intervention">
    <h2 class="section-title">Domaines d'Intervention</h2>
    <p>Nos domaines clés d'action</p>
    <div class="grid-container">
        <div class="grid-item" data-url="action_humanitaire.html">
            <h2>Actions humanitaires</h2>
            <img src="public/images/group.png" alt="">
        </div>
        <div class="grid-item" data-url="adaptation.html">
            <h2>Adaptation</h2>
            <img src="public/images/Tiny house-rafiki.png" alt="">
        </div>
        <div class="grid-item" data-url="action_humanitaire.html">
            <h2>Employabilité des jeunes et des femmes</h2>
            <img src="public/images/Back to school-rafiki.png" alt="">
        </div>
        <div class="grid-item" data-url="action_humanitaire.html">
            <h2>Développement communautaire</h2>
            <img src="public/images/Emancipation of women-bro.png" alt="">
        </div>
        <div class="grid-item" data-url="domaine_trans.html">
            <h2>Domaines transversaux</h2>
            <img src="public/images/helping.png" alt="">
        </div>
        <div class="grid-item" data-url="action_humanitaire.html">
            <h2>Intégration</h2>
            <img src="public/images/business.png" alt="">
        </div>
    </div>
</section>
