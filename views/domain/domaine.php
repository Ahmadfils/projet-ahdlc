<div class="container">
    <h1 class="page-title">Domaine des Jeunes et des Femmes</h1>

    <!-- Section des articles -->
    <section class="article-cards">
        <div class="card">
            <h3>Formation en entreprenariat</h3>
            <p>Des ateliers interactifs pour initier les jeunes à la création et gestion de petites entreprises locales.</p>
        </div>
        <div class="card">
            <h3>Insertion professionnelle</h3>
            <p>Accompagnement personnalisé pour faciliter l'intégration des jeunes diplômés dans le marché du travail.</p>
        </div>
        <div class="card">
            <h3>Autonomisation des femmes rurales</h3>
            <p>Des programmes de micro-crédit et de formation pour aider les femmes à développer leurs propres activités.</p>
        </div>
        <div class="card">
            <h3>Tech for Women</h3>
            <p>Formations gratuites en compétences numériques pour encourager les carrières féminines dans la tech.</p>
        </div>
    </section>

    <!-- Section Get Started -->
    <section class="cta-section">
        <h2>Prêt à vous lancer ?</h2>
        <p>Découvrez comment nos programmes peuvent transformer votre avenir professionnel.</p>
        <a href="#demande">Commencer maintenant</a>
    </section>
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
    <!-- Section Register -->
    <section class="cta-section">
        <h2>Pas encore inscrit ?</h2>
        <p>Rejoignez notre communauté et accédez à nos services d’accompagnement.</p>
        <a href="register.php">S'inscrire</a>
    </section>

    <!-- Formulaire de demande -->
    <section id="demande" class="demande-form">
        <h2>Faire une demande</h2>
        <form action="traitement_demande.php" method="post">
            <input type="text" name="nom" placeholder="Votre nom complet" required>
            <input type="email" name="email" placeholder="Adresse email" required>
            <select name="programme" required>
                <option value="">Choisissez un programme</option>
                <option value="entreprenariat">Formation en entreprenariat</option>
                <option value="insertion">Insertion professionnelle</option>
                <option value="autonomisation">Autonomisation des femmes</option>
                <option value="tech">Tech for Women</option>
            </select>
            <textarea name="message" rows="4" placeholder="Expliquez votre motivation..." required></textarea>
            <button type="submit">Envoyer la demande</button>
        </form>
    </section>

</div>
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