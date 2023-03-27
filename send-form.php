/*** Fichier PHP (send-form.php)
*
* Vérification des données reçues via la requête, et
* affichage d'une réponse.
*/

<?php
$post_id = ! empty($_GET['post_id']);
$nom = ! empty($_GET['nom']);
$prenom = ! empty($_GET['prenom']);
$num01 = ! empty($_GET['num01']);
$num02 = ! empty($_GET['num02']);
$num03 = ! empty($_GET['num03']);
$num04 = ! empty($_GET['num04']);
$num1 = ! empty($_GET['num1']);
$num2 = ! empty($_GET['num2']);
$num = ! empty($_GET['num']);
if ($post_id && $nom && $prenom && $num01 && $num02 && $num03 && $num04 && $num1 && $num2 && $num )
echo '(PHP) OK...';
else
echo '(PHP) Error...';
?>