<?php

namespace modules\views;

class Layout
{
    public function __construct(
        private string $title,
        private string $content
    ) {
    }

    public function show(): void
    {
        ?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <title><?= htmlspecialchars($this->title); ?></title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/_assets/style/style.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Accueil</a></li>
    </ul>
    <div class="dropdown">
        <button type="button">Menu ▾</button>
        <div class="menu">
            <?php if (!isset($_SESSION['email'])) { ?>
            <a href="index.php?action=signup">Inscription</a>
            <a href="index.php?action=login">Connexion</a>
        </div>
    </div>
</nav>
<main>
        <?= $this->content; ?>
</main>
</body>
</html>
        <?php
    }
}

?>