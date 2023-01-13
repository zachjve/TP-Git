<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mediathèque</title>

  <link rel="stylesheet" href="/assets/css/main.min.css">
</head>

<body>
  <header>
    <div>
      <a href="">Home</a>
    </div>
    <div>
      <img src="https://picsum.photos/35" alt="" />
      <nav>
        <?php
        if ($datas[0] === false) { ?>
          <ul>
            <li><a href="">Connexion</a></li>
            <li><a href="">Inscription</a></li>
          </ul>
        <?php } else { ?>
          <ul>
            <li><a href="">Profil</a></li>
            <li><a href="">Déconnexion</a></li>
          </ul>
        <?php } ?>
      </nav>
    </div>
  </header>

  <main class="main-container">
    <?= $contenu ?>
  </main>

  <footer>
    <p>&copy; IT-Students all rights reserved</p>
  </footer>

</body>

</html>