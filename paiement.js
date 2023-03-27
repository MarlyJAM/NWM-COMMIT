/*** Javascript ***/

function sendForm()
{
// Récupération des valeurs des champs de formulaire
var post_id = document.getElementById('post_id').value;
var nom = document.getElementById('nom').value;
var prenom = document.getElementById('prenom').value;
var num01 = document.getElementById('num01').value;
var num02 = document.getElementById('num02').value;
var num03 = document.getElementById('num03').value;
var num04 = document.getElementById('num04').value;
var num1 = document.getElementById('num1').value;
var num2 = document.getElementById('num2').value;
var num = document.getElementById('num').value;
var check = document.getElementById('check').value;
for (var i = ''; i < radio.length; i++) {
	if(onclick('document.getElementById('monsieur')')){
		var i=document.getElementById('monsieur').value;
	}
	else if (onclick('document.getElementById('madame')')) {
		var i=document.getElementById('madame').value;
	}
	else(onclick('document.getElementById('mademoiselle')')){
		var i=document.getElementById('mademoiselle').value;
	}
}


// Préparation de la querystring d'URL
var params = '?post_id=' + encodeURIComponent(post_id);
params += '&nom=' + encodeURIComponent(nom);
params += '&prenom=' + encodeURIComponent(prenom);
params += '&num01=' + encodeURIComponent(num01);
params += '&num02=' + encodeURIComponent(num02);
params += '&num03=' + encodeURIComponent(num03);
params += '&num04=' + encodeURIComponent(num04);
params += '&num1=' + encodeURIComponent(num1);
params += '&num2=' + encodeURIComponent(num2);
params += '&num=' + encodeURIComponent(num);
params += '&check=' + encodeURIComponent(check);
params += '&i=' + encodeURIComponent(i);
// Récupération de l'objet XHR
var xhr = getXhr();

// On assigne une fonction qui, lorsque l'état de la requête change, va traiter le résultat
xhr.onreadystatechange = function()
{
// readyState 4 = requête terminée
if (xhr.readyState == 4)
{
// status 200 = page requêtée trouvée
if (xhr.status == 200)
ajaxBox_setText(xhr.responseText);
// Page non trouvée
else
ajaxBox_setText('Error...');
}
};

// Passage des paramètres à l'URL puis éxecution de la requête
var url = 'http://site.com/send-form.php' + params;
xhr.open('GET', url, true);
xhr.send(null);
}



// Fonction de mise à jour du contenu de l'élement HTML #result
function ajaxBox_setText(pText)
{
var p = document.getElementById('result');
p.appendChild(document.createTextNode(pText));
}
 