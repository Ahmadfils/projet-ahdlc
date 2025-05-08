
    <title>Employabilité des Jeunes et des Femmes</title>
    <link rel="stylesheet" href="public/css/employabilite.css">


    <div class="container">
        <h1 class="page-title">Employabilité des Jeunes et des Femmes</h1>

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

</body>
</html>
