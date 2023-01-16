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
    <div class = "title">
      <a href="">Home</a>
    </div>
    <div class="dropDownList">
      <img src="https://picsum.photos/50" alt="" />
      <nav>
        <?php
        $datas = false;
        if ($datas === false) { ?>
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