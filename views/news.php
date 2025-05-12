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

   <section class="cta-section">
        <h2>Pas encore inscrit ?</h2>
        <p>Rejoignez notre communauté et accédez à nos services d’accompagnement.</p>
        <a href="register.php">S'inscrire</a>
    </section>

<!-- Footer -->