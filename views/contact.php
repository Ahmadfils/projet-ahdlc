<?php  ?>
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


<div class="contact-section">
    <div class="contact-image"></div>

    <div class="contact-form">
        <h3>Envoyez-nous un message</h3>
        <form method="POST">

            <?php  
            $csrf = new CSRF_Protect();
            $csrf->echoInputField(); 
            ?>

            <div class="input-icon">
                <input type="text" placeholder="Nom complet" name="fullname" required>
            </div>
            <div class="input-icon">
                <input type="email" placeholder="Adresse e-mail" name="email" required>
            </div>
            <div class="input-icon">
                <input type="number" placeholder="Numero de telephone" name="tel" required>
            </div>
            <div class="input-icon">
                <textarea placeholder="Votre message" name="message" required></textarea>
            </div>
            <button type="submit" name="contact_form">Envoyer</button>
        </form>
    </div>
</div>

<div class="alert success-alert"><?php if(!empty($data['message'])) echo $data['message']; ?></div>


