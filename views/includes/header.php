<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, Mainial-scale=1.0">
    <title><?php echo Main::$settings['home_title']; ?></title>
    <link rel="shortcut icon" href="<?php echo url('public/images/' . Main::$settings['favicon']); ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo url('public/css/styles.css'); ?>">
</head>

<body>
    <header>
        <div class="header-flex">
            <div class="navbar-logo">
                <a href="<?php echo url('home'); ?>">
                    <img src="<?php echo url('/public/images/' . Main::$settings['site_logo']); ?>" alt="Logo">
                    <span class="logo-title">AHDLC</span>
                </a>
            </div>
            <div class="menu-toggle" id="menu-toggle">
                ☰
            </div>
            <nav id="nav-menu">
                <ul>
                    <li><a href="<?php echo url('home') ?>">Accueil</a></li>
                    <li><a href="<?php echo url('about') ?>">À propos</a></li>
                    <li><a href="<?php echo url('news') ?>">Actualités</a></li>
                    <li class="dropdown">
                        <a href="#">Domaines d'intervention</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo url('action') ?>">Actions humanitaires</a></li>
                            <li><a href="<?php echo url('adaptation') ?>">Adaptation climatique</a></li>
                            <li><a href="<?php echo url('employabilite') ?>">Employabilité des jeunes et des femmes</a></li>
                            <li><a href="<?php echo url('developpement') ?>">Développement communautaire</a></li>
                            <li><a href="<?php echo url('domaine') ?>">Domaines transversaux</a></li>
                            <li><a href="<?php echo url('integration') ?>">Intégration</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Service 1</a></li>
                            <li><a href="#">Service 2</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo url('contact') ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>