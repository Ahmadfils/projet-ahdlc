
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

    <?php
    foreach ($data['news'] as $new):
    ?>
        <div class="news-item">
            <a href="<?php echo url('news/post/'.$new->id);?>">
                <img src="<?php echo url('public/images/'.$new->image_banner); ?>" alt="Image actualité">
                <h3><?php echo $new->titre; ?></h3>
                <p><?php echo $new->intro; ?></p>
            </a>
        </div>
    <?php endforeach; ?>
</section>

<!-- Pagination -->

<div class="pagination">
    <a href="#">&laquo;</a>
     <?php

      $n = $data['nombre_page']; 
      $page = 1;

      while ( $page <= $n) {
     ?>
       <a href="<?php echo url('news?page='.$page + $i);?>" 
          class="<?php if($page) echo "active"; ?>">

      <?php echo $page; 
           $page++; 
        }  
     ?>
              
        </a>
     
    <a href="#">&raquo;</a>
</div>

   <section class="cta-section">
        <h2>Pas encore inscrit ?</h2>
        <p>Rejoignez notre communauté et accédez à nos services d’accompagnement.</p>
        <a href="auth">S'inscrire</a>
    </section>
