<?php
require_once "views/includes/header.php";
?>
<link rel="stylesheet" href="public/css/contact.css">
<!-- Section de contact -->
<div class="contact-section">
    <div class="contact-image"></div>

    <div class="contact-form">
        <h3>Envoyez-nous un message</h3>
        <form>
            <div class="input-icon">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nom complet" required>
            </div>
            <div class="input-icon">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Adresse e-mail" required>
            </div>
            <div class="input-icon">
                <i class="fas fa-comment"></i>
                <textarea placeholder="Votre message" required></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</div>



<!-- Informations de contact -->
<section class="infos-contact">
    <h2>Nos coordonnées</h2>
    <ul>
        <li>Email : contact@actionhumanitaire.org</li>
        <li>Tél : +257 22 22 22 22</li>
        <li>Adresse : Bujumbura, Burundi</li>
    </ul>
</section>
<section class="faq-section">
    <h2>FAQ - Questions Fréquentes</h2>

    <div class="faq-item">
        <div class="faq-question">
            Comment puis-je contacter votre équipe ?
            <span class="faq-toggle-icon"><i class="fa-solid fa-chevron-right"></i> </i></span>
        </div>
        <div class="faq-answer">Vous pouvez nous contacter via le formulaire ci-dessus ou par email à
            contact@notresite.com.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">
            Où êtes-vous situés ?
            <span class="faq-toggle-icon"><i class="fa-solid fa-chevron-right"></i> </i></span>
        </div>
        <div class="faq-answer">Nous sommes basés à Bujumbura, Burundi, mais notre mission s'étend à travers tout le
            pays.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">
            Comment puis-je m'impliquer dans vos projets ?
            <span class="faq-toggle-icon"><i class="fa-solid fa-chevron-right"></i> </i></span>
        </div>
        <div class="faq-answer">Vous pouvez nous écrire via le formulaire de contact pour connaître les opportunités
            de bénévolat ou de partenariat.</div>
    </div>
</section>

<?php
require_once "views/includes/footer.php";
?>