 
 <main class="details-container">
    <img src="images/world.png" alt="Image de l’actualité">
    <?php foreach ($data as $article) { ?>
    <h2><?php echo $article->titre; ?></h2>
    <p class="date">Publié le 17 avril 2025</p>
    <p class="content">
      <?php echo $article->content; ?>
    </p>

    <a href="news.html" class="retour-btn">← Retour aux actualités</a>
 </main>

  <section class="cta-section">
        <h2>Pas encore inscrit ?</h2>
        <p>Rejoignez notre communauté et accédez à nos services d’accompagnement.</p>
        <a href="register.php">S'inscrire</a>
  </section>

     <?php } ?>