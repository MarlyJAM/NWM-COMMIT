<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="produit.css">
  <title>nosproduits</title>
</head>
<body>
  <header id="main">
    <table>
      <tr class="table">
        <td class="tablette">
            <a href="contacts.html"> <img src="screen/148506941-conception-de-modèle-de-vecteur-plat-icône-enveloppe-à-la-mode.webp"  width="30" height="30" title="mail" alt="mail"></a>
        </td >
        <td class="tablette">
            <a href="https://www.facebook.com/News-Moments-107963441863053/?ref=pages_you_manage"> <img src="screen/20673.png"  width="30" height="30" title="page" alt="facebook"></a>
        </td>
        <td class="tablette">
            <a href="https://www.linkedin.com/in/marguerite-massinga-a62468228"> <img src="screen/61109.png"  width="25" height="25" title="linkedin" alt="linkedin"></a>
        </td>
      </tr>
    </table>
  
    <nav class="menu" >
      <ul>
        <li class="pouce">
          <a href="index.html"> Acceuil </a>
        </li>
        <li class="pouce">
          <a href="infossup.html">A propos de nous</a>
        </li>
        <li class="pouce">
          <a href="logout.php">Déconnexion</a>
        </li>
        <li class="pouce">
          <a href="contacts.html">Contacts</a>
        </li>
      </ul>

     </nav>
    <h1 align="center">Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p align="center">C'est votre tableau de bord.</p>
    <input type="search" name="search" class="search" placeholder="search...">
  </header>
  <img src="screen/2c11993ddd23a2851bae0a38b184bac1.png" class="img">
  <div>
    <div id="mainproduct">
          <section>
          <article>
            <h3>Nos films d'animations</h1>
            <a href="https://anime-sama.fr/anime/"><img src="screen/Brave_Story.webp" width="450px" height="300px"></a>
          </article>
            <article>
              <h3>Animés</h3>
              <a href="https://anime-sama.fr/anime/"><img src="screen/f21.gif" width="450px" height="300px"><a>
            </article>
            <article>
            <h3>Scans</h3>
            <a href="https://anime-sama.fr/scan/"><img src="screen/tumblr_mn53vd2XPw1r3gilro1_1280.jpg" width="450px" height="300px"></a>
          </article>
          </section>
    </div align="center">

    <div id="secondproduct">
      <div>
        <h2>Figurines et cosplays</h2>
        <section>
          <article>
            <h4>Retrouvez ici nos différents articles en matières de figurines</h4>
            <a href="https://figurinemangafrance.fr/collections/toutes-nos-figurines"><img src="screen/Had6fee7949624f539ea527d8417a2767E.gif" width="500px" height="300px"></a>
          </article>
          <article>
            <h4>Besoin d'un cosplay pour une convention ou juste comme  ca? ici c'est le bonne endroit &#x1F601</h4>
            <a href="https://figurinemangafrance.fr/collections/cosplay"><img src="screen/MjAyMTA5ZjczYzIzNzM5MTNjODQ3MTk1NDVhNjY2YzRiNjIyNGM.webp" width="500px" height="300px"></a>

          </article>
        </section>
      </div>
      <div>
        <h2>Notebooks et Artbook</h2>
        <section>
          <article>
            <h4>Des notebooks stylés &#x1F914? Il y'en a pour tous les gouts et bourses chez notre sociétés partenaires &#x1F660</h4>
            <a href="https://www.templedumanga.com/collections/notebook"><img src="screen/71REkhhzdRS.jpg " width="500px" height="300px"></a>
          </article>
          <article>
            <h4>Des artbooks stylés &#x1F914? Il y'en a pour tous les gouts et bourses chez notre sociétés partenaires &#x1F660</h4>
            <a href="https://www.templedumanga.com/pages/search-results-page?q=artbook"><img src="screen/Artbook-Horizon-Zero-Dawn-version-fr-7.jpg" width="500px" height="300px"></a>

          </article>
        </section>
      </div>
    </div>
  </div>
  <a href="paiement.html" class="premium">Devenir premium</a>
  <footer>
  <div>
    <div>
      <ul>
        <li>
          <a href="index.html">Accueil </a>
        </li>
        <li>
          <a href="infossup.html">Sur Nous</a>
        </li>
        <li>
          <a href="index.php">Connexion</a>
        </li>
        <li>
          <a href="#">Concours</a>
        </li>
      </ul>
    </div>
    <div>
      <img src="screen/logo.png" class="logo">
    </div>
    <div>
      <ul>
        <li>
          <a href="contacts.html"> <img src="screen/148506941-conception-de-modèle-de-vecteur-plat-icône-enveloppe-à-la-mode.webp"  width="30" height="30" title="mail" alt="mail"></a>
        </li>
        <li>
          <a href="https://www.facebook.com/News-Moments-107963441863053/?ref=pages_you_manage"> <img src="screen/20673.png"  width="30" height="30" title="page" alt="facebook"></a>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/marguerite-massinga-a62468228"> <img src="screen/61109.png"  width="25" height="25" title="linkedin" alt="linkedin"></a>
        </li>
      </ul>
    </div>
  </div>
  <p>
      Copyright &copy;  newsmoments 2021-2022 - All rights reserved
  </p>
</footer>
</body>
</html>