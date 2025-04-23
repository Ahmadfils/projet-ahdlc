<?php
require_once "views/includes/header.php";
?>

<div class="main-wrapper">
    <!-- Article principal -->
    <div class="article-container">
        <div class="article-content">
            <img src="public/images/humanitarian.png" alt="Photo article humanitaire">
            <h1>Aider les communautés rurales du Burundi</h1>
            <p>
                Notre organisation mène une action humanitaire dans les régions rurales du Burundi pour améliorer
                l'accès à l'eau potable, la santé et l'éducation.
            </p>
            <p>
                Ce projet a permis de distribuer des kits sanitaires à plus de 500 familles et de construire 3 puits
                d’eau. Grâce à l'engagement des bénévoles, des séances de sensibilisation ont également été
                organisées.
            </p>
            <p>
                Cette action fait partie d’un programme à long terme visant à renforcer l’autonomie des populations
                locales.
            </p>
        </div>
    </div>

    <!-- Aside avec articles récents -->
    <aside class="article-aside">
        <h3>Articles Récents</h3>

        <a href="article2.html" class="article-aside-item">
            <img src="public/images/humanitarian.png" alt="thumb1">
            <div class="article-aside-item-title">Accès à l'eau potable pour tous</div>
        </a>

        <a href="article3.html" class="article-aside-item">
            <img src="public/images/humanitarian.png" alt="thumb2">
            <div class="article-aside-item-title">Séances de sensibilisation sanitaire</div>
        </a>

        <a href="article4.html" class="article-aside-item">
            <img src="public/images/humanitarian.png" alt="thumb3">
            <div class="article-aside-item-title">Construction d'écoles communautaires</div>
        </a>

        <a href="article5.html" class="article-aside-item">
            <img src="public/images/humanitarian.png" alt="thumb4">
            <div class="article-aside-item-title">Soutien nutritionnel aux enfants</div>
        </a>

        <a href="article6.html" class="article-aside-item">
            <img src="public/images/humanitarian.png" alt="thumb5">
            <div class="article-aside-item-title">Formation des jeunes entrepreneurs</div>
        </a>
    </aside>
</div>

<!-- Navigation entre articles -->
<div class="article-navigation">
    <button><i class="fas fa-arrow-left"></i> Article précédent</button>
    <button>Article suivant <i class="fas fa-arrow-right"></i></button>
</div>

<?php
require_once "views/includes/footer.php";
?>