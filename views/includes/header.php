<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Humanitaire</title>
    <link rel="shortcut icon" href="views/public/images/<?php echo AppConfig::$settings['favicon'];?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>
    <header>
        <div class="menu-toggle" id="menu-toggle">
            ☰
        </div>
        <nav id="nav-menu">
            <ul>
                <li><a href="home">Accueil</a></li>
                <li><a href="about">À propos</a></li>
                <li><a href="news">Actualités</a></li>
                <li class="dropdown">
                    <a href="#">Domaines d'intervention</a>
                    <ul class="dropdown-menu">
                        <li><a href="action">Actions humanitaires</a></li>
                        <li><a href="adaptation">Adaptation</a></li>
                        <li><a href="employabilite">Employabilité des jeunes et des femmes</a></li>
                        <li><a href="developpement">Développement communautaire</a></li>
                        <li><a href="domaine">Domaines transversaux</a></li>
                        <li><a href="integration">Intégration</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Service 1</a></li>
                        <li><a href="#">Service 2</a></li>
                    </ul>
                </li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </nav>
    </header>