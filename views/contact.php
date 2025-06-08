<section class="faq-section">
    <h2>FAQ - Questions Fréquentes</h2>
    <?php foreach ($data['faq'] as $row): ?>
    <div class="faq-item">
        <div class="faq-question">
            <?php echo $row->question; ?>
            <span class="faq-toggle-icon"><i class="fa-solid fa-chevron-right"></i> </i></span>
        </div>
        <div class="faq-answer"><?php echo $row->reponse; ?></div>
    </div>
    <?php endforeach; ?>
</section>

<section class="infos-pro">
    <h2>Nos coordonnées</h2>
    <p>© 2025 Inzuex - Tous droits réservés.</p>
    <p>Contact : info@inzuex.com | Tél : +257 123 456 789</p>
    <p>Adresse : Bujumbura, Burundi</p>
</section>


<div class="contact-section">
    <div class="contact-image"></div>

    <div class="contact-form">
        <h3>Envoyez-nous un message</h3>
        <form method="POST" action="">
            <div class="input-icon">
                <input type="text" placeholder="Nom complet" name="nom" required>
            </div>
            <div class="input-icon">
                <input type="email" placeholder="Adresse e-mail" name="email" required>
            </div>
            <div class="input-icon">
                <textarea placeholder="Votre message" name="message" required></textarea>
            </div>
            <button type="submit" name="contact_form">Envoyer</button>
        </form>
    </div>
</div>


