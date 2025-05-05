
<link rel="stylesheet" href="public/css/news.css">
<!-- Titre + recherche -->
<section class="titre-recherche-container">
    <h1>Actualités</h1>
    <form class="recherche-form">
        <input type="text" placeholder="Rechercher une actualité...">
        <button type="submit">Rechercher</button>
    </form>
</section>

<div class="filtres-container">
    <button>Toutes</button>
    <button>Tech</button>
    <button>Business</button>
    <button>Éducation</button>
</div>

<section class="news-grid">
    <!-- Génération de 15 news -->
    <!-- Tu peux répéter ce bloc en changeant le contenu -->
    <?php 
       foreach ($data['news'] as $new):
     ?>
    <div class="news-item">
        <a href="details-news.html">
            <img src="public/images/<?php echo $new->image_banner; ?>" alt="Image actualité">
            <h3><?php echo $new->titre; ?></h3>
            <p><?php echo $new->intro; ?></p>
        </a>
    </div>
    <?php endforeach; ?>
</section>

<!-- Pagination -->
<div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">&raquo;</a>
</div>

<!-- Infos professionnelles -->
<section class="infos-pro">
    <p>© 2025 Inzuex - Tous droits réservés.</p>
    <p>Contact : info@inzuex.com | Tél : +257 123 456 789</p>
    <p>Adresse : Bujumbura, Burundi</p>
</section>

<!-- Footer -->
<?php
require_once "views/includes/footer.php";
?>