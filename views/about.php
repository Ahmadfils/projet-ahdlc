<?php
require_once "views/includes/header.php";
?>
<link rel="stylesheet" href="public/css/about.css">
<!-- Présentation -->
<section class="presentation">
    <div class="presentation-text">
        <h1>Action Humanitaire</h1>
        <p>
            Action Humanitaire est une organisation dédiée à apporter une aide essentielle aux populations
            vulnérables.
            Notre mission est d'améliorer la vie des personnes en détresse à travers des projets concrets et
            durables.
        </p>
    </div>
    <div class="presentation-img">
        <img src="public/images/group.png" alt="Présentation">
    </div>
</section>

<!-- Historique -->
<section class="historique">
    <h2>Historique</h2>
    <p>
        Depuis notre création en 2010, nous avons œuvré dans plusieurs régions pour soutenir les communautés
        défavorisées
        à travers des campagnes de santé, d’éducation et de développement rural. Notre engagement est profondément
        enraciné
        dans la solidarité et l’empathie.
    </p>
</section>

<!-- Mission (Roadmap) -->
<section class="mission">
    <h2>Notre Mission</h2>
    <div class="roadmap">
        <div class="step">
            <div class="icon">🤝</div>
            <p>Soutenir les populations vulnérables</p>
        </div>
        <div class="arrow">➡️</div>
        <div class="step">
            <div class="icon">🏥</div>
            <p>Améliorer l'accès aux soins</p>
        </div>
        <div class="arrow">➡️</div>
        <div class="step">
            <div class="icon">📚</div>
            <p>Renforcer l’éducation des enfants</p>
        </div>
    </div>
</section>

<!-- Vision -->
<section class="vision">
    <h2>Notre Vision</h2>
    <p>
        Nous rêvons d’un monde où chaque personne a accès à une vie digne, des opportunités d’éducation et des soins
        essentiels.
        Nous croyons qu’avec une action collective, le changement est possible.
    </p>
</section>

<!-- Projets -->
<section class="projets">
    <h2>Nos Projets</h2>
    <div class="projets-list">
        <div class="projet-item">
            <img src="public/images/helping.png" alt="Projet 1">
            <p>Campagne de vaccination en milieu rural</p>
        </div>
        <div class="projet-item">
            <img src="public/images/group.png" alt="Projet 2">
            <p>Construction de puits d'eau potable</p>
        </div>
        <div class="projet-item">
            <img src="public/images/helping.png" alt="Projet 3">
            <p>Distribution de fournitures scolaires</p>
        </div>
        <div class="projet-item">
            <img src="public/images/group.png" alt="Projet 4">
            <p>Appui aux orphelinats locaux</p>
        </div>
    </div>
</section>

<section class="dual-column-section">
    <div class="left-column">
        <div class="item">
            <img src="public/images/world.png" alt="Item 1">
            <p>Lorem ipsum dolor sit amet, item 1 description.</p>
        </div>
        <div class="item">
            <img src="public/images/world.png" alt="Item 2">
            <p>Consectetur adipiscing elit, item 2 description.</p>
        </div>
        <div class="item">
            <img src="public/images/world.png" alt="Item 3">
            <p>Sed do eiusmod tempor, item 3 description.</p>
        </div>
    </div>
    <div class="right-column">
        <h2>À propos de cette section</h2>
        <p>Cette colonne peut contenir une description, une image ou tout autre contenu complémentaire.</p>
    </div>
</section>
<?php
require_once "views/includes/footer.php";
?>