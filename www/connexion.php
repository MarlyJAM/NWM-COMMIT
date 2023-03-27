<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="connexion.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
  <script src="script.js" defer></script>
  <title>Connexion</title>
</head>

<body>
  <header id="affiche">
    <table>
        <tr>
          <td class="tablette">
                  <a href="contacts.html"> <img src="screen/148506941-conception-de-modèle-de-vecteur-plat-icône-enveloppe-à-la-mode.webp"  width="30" height="30" title="mail" alt="mail"></a>
          </td >
          <td class="tablette">
                  <a href="https://www.facebook.com/News-Moments-107963441863053/?ref=pages_you_manage"> <img src="screen/20673.png"  width="30" height="30" title="page" alt="facebook"></a>
           </td>
                <td class="tablette">
                  <a href="https://www.linkedin.com/in/marguerite-massinga-a62468228"> <img src="screen/61109.png"  width="25" height="25" title="linkedin" alt="linkedin"></a>
                </td>
              
          </td>
          <td>
            <nav class="menu" >
              <ul>
                <li class="pouce">
                  <a href="index.html"> Acceuil </a>
                </li>
                <li class="pouce">
                  <a href="infossup.html">A propos de nous</a>
                </li>
              </ul>
            </nav>
          </td>
        </tr>
    </table>
  </header>
  <div class="container">
    <div class="logo">
      <i class="fas fa-user"></i>
    </div>

    <div class="tab-body" data-id="connexion">
      <form>
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" name="pseudo" class="input" id="pseudo" placeholder="Nom d'utilisateur">
        </div>
        <div class="row">
          <i class="far fa-user"></i>
          <input type="email" class="input" placeholder="Adresse Mail" name="mail">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input placeholder="Mot de Passe" type="password" class="input" name="password">
        </div>
        <a href="#" class="link">Mot de passe oublié ?</a>
        <button class="btn" type="button">Connexion</button>
      </form>
    </div>

    <div class="tab-body" data-id="inscription">
      <form id="inscription" name="inscription" method="post">
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" name="nom" class="input" id="nom" placeholder="Nom ">
        </div>
         <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" name="nom" class="input" id="prenom" placeholder="Prenom ">
        </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" name="pseudo" class="input" id="pseudo" placeholder="Nom d'utilisateur">
        </div>
        <div class="row">
          <i class="far fa-user"></i>
          <input type="email" class="input" id="mail" placeholder="Adresse Mail">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" class="input" id="secret" placeholder="Mot de Passe">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" class="input" id="csecret" placeholder="Confirmer Mot de Passe">
        </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <select name="pays" id="pays" class="input">
                <optgroup label="Afrique">
                  <option> Afrique du Sud</option>
                  <option>Nigéria</option>
                  <option>Egypte</option>
                  <option>Algérie</option>
                  <option>Maroc</option>
                  <option>Angola</option>
                  <option>Gabon</option>
                  <option>Maroc</option>
                  <option>Angola</option>
                  <option>Kenya</option>
                  <option>Ethiopie</option>
                  <option>Tanzanie</option>
                  <option>Ghana</option>
                  <option> Libye</option>
                  <option>Côte d’Ivoire</option>
                  <option>République Démocratique du Congo </option>
                  <option> Tunisie</option>
                  <option>Cameroun</option>
                  <option>Ouganda </option>
                  <option>Zambie</option>
                  <option>Zimbabwe </option>
                  <option>Sénégal</option>
                  <option>Botswana</option>
                    
                  </optgroup>
                  <optgroup label="Amérique">
                    <option>Canada</option>
                    <option>Etats-Unis</option>
                    <option> Brésil </option>
                    <option>Argentine</option>  
                    <option>Venezuela</option>  
                    <option>Colombie</option> 
                    <option>Chili</option>  
                    <option>Pérou</option>  
                    <option>Équateur</option> 
                    <option>Uruguay </option>
                    <option>Paraguay</option> 
                    <option>Bolivie 
                    <option>Guyana</option> 
                    <option>Suriname</option> 
                  </optgroup>
                <optgroup label="Asie">
                  <option>la Chine</option> 
                  <option>Corée du Sud</option>
                  <option>Corée du Nord</option>
                  <option>Taïwan </option>
                  <option>Japon</option>
                  <option>la Mongolie</option>
                  <option>Indonésie</option>
                  <option>Philippines </option>
                  <option>la Birmanie </option>
                  <option>la Malaisie</option> 
                  <option>le Cambodge </option>
                  <option>le Laos </option>
                  <option>Singapour </option>
                  <option>le Timor </option>
                  <option>le Brunei </option>
                  <option>Turquie </option>
                  <option>Israël</option>
                  <option>Palestine </option>
                  <option>Syrie</option>
                  <option>Jordanie </option>
                  <option>Arabie Saoudite </option>
                  <option>Émirats arabes unis</option> 
                  <option>Koweït</option>
                  <option>Qatar </option>
                  <option>Inde</option>
                    
                </optgroup>
                <optgroup label="Europe">
                  <option>Albanie</option>
                  <option>Allemagne</option>
                  <option>Andorre</option>
                  <option>Autriche</option>
                  <option>Belgique</option>
                  <option>Biélorussie</option>
                  <option>Bosnie-Herzégovine</option>
                  <option>Bulgarie</option>
                  <option>Chypre</option>
                  <option>Croatie</option>
                  <option>Danemark</option>
                  <option>Espagne</option>
                  <option>Estonie</option>
                  <option>Finlande</option>
                  <option>France</option>
                  <option>Grèce</option>
                  <option>Hongrie</option>
                  <option>Irlande</option>
                  <option>Islande</option>
                  <option>Italie</option>
                  <option>Kosovo</option>
                  <option>Lettonie</option>
                  <option>Liechtenstein</option>
                  <option>Lituanie</option>
                  <option>Luxembourg</option>
                  <option>Macédoine</option>
                  <option>Malte</option>
                  <option>Moldavie</option>
                  <option>Monaco</option>
                  <option>Monténégro</option>
                  <option>Norvège</option>
                  <option>Pays-Bas</option>
                  <option>Pologne</option>
                  <option>République tchèque</option>
                  <option>Roumanie</option>
                  <option>Royaume-Un</option>
                  <option>Russie</option>
                  <option>Serbie</option>
                  <option>Saint-Marin</option>
                  <option>Serbie</option>
                  <option>Slovaquie</option>
                  <option>Slovénie</option>
                  <option>Suède</option>
                  <option>Suisse</option>
                  <option>Turquie</option>
                  <option>Ukraine</option>
                   
                </optgroup>
              </select>
        </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" name="nom" class="input" id="pays" placeholder="Autre pays">
        </div>
       <input class="btn" type="submit" value="Inscription" id="formsend">
      </form>
    </div>

    <div class="tab-footer">
      <a class="tab-link active" data-ref="connexion" href="javascript:void(0)">Connexion</a>
      <a class="tab-link" data-ref="inscription" href="javascript:void(0)">Inscription</a>
    </div>
  </div>

  <?php
      if (isset($_POST['formsend'])) {
        // code...
        extract($_POST);
        if (!empty($nom) && !empty($prenom) && !empty($pseudo) && !empty($secret) && !empty($mail) && !empty($pays) ) {
          if ($secret==$csecret) {
            // code...
            $options = [
              'cost'=> 12,
            ];
            $hashpass = password_hash($secret,PASSWORD_BCRYPT,$options);
            include 'includes/database.php';
            global $db;
            $q=$db -> prepare("INSERT INTO users(nom,prenom,pseudo,mail,secret,pays) VALUES(:nom,:prenom,:pseudo,:mail,:secret,:pays)");
            $q -> execute([
              'nom'=>$nom,
              'prenom'=>$prenom,
              'mail'=>$mail,
              'pseudo'=>$pseudo,
              'secret'=>$hashpass,
              'pays'=>$pays,




            ]);

          }

        }

      }
    ?>

</body>

</html>