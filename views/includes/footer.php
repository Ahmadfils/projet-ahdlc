<footer>
    <div class="footer-content">
        <div class="footer-links">
            <h4>Navigation</h4>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h4>Nos Services</h4>
            <ul>
                <li><a href="#">Service 1</a></li>
                <li><a href="#">Service 2</a></li>
                <li><a href="#">Service 2</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h4>Réseaux sociaux</h4>
            <ul>
                <li><a href="<?php echo AppConfig::$settings['linkedin_link']; ?>">Linkedin</a></li>
                <li><a href="<?php echo AppConfig::$settings['twitter_link']; ?>">Twitter</a></li>
                <li><a href="<?php echo AppConfig::$settings['instagram_link']; ?>">Instagram</a></li>
                <li><a href="<?php echo AppConfig::$settings['facebook_link']; ?>">Facebook</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h4>Contact</h4>
            <p>Email : <?php echo AppConfig::$settings['website_email']; ?></p>
            <p>Téléphone : <?php echo AppConfig::$settings['phone_number'] ?></p>
        </div>
    </div>
    <p class="copyright">&copy; 2025 Action Humanitaire - Tous droits réservés</p>
</footer>
<script src="public/js/contact.js"></script>
<script src="public/js/script.js"></script>
<script src="public/js/about.js"></script>

</body>

</html>