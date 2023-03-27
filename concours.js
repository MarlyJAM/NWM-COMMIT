//document.forms["formul"].addEventListener("submit", function(e) {

 
 // var erreur;
       
 // var inputs = this;
       
  // Traitement générique
 // for (var i = 0; i < inputs.length; i++) {
   // console.log(inputs[i]);
  //  if (!inputs[i].value) {
  //    erreur = "Veuillez renseigner tous les champs";
   //   break;
 //   }
//  }
       
  //if (erreur) {
 //   e.preventDefault();
 //   document.getElementById("erreur").innerHTML = erreur;
 //   return false;
 // } else {
  //     alert('Formulaire envoyé !');
//  }
        
//
document.getElementById("")
  document.getElementById("Image").addEventListener("image", function(e) {
  e.preventDefault();
 
  var data = new FormData(this);
 
  var xhr = new XMLHttpRequest();
 
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.response);
      var res = this.response;
      if (res.success) {
        console.log("Utilisateur inscrit !");
      } else {
        alert(res.msg);
      }
    } else if (this.readyState == 4) {
      alert("Une erreur est survenue...");
    }
  };
 
  xhr.open("POST", "/async/script.php", true);
  xhr.responseType = "json";
  // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(data);
 
  return false;
});​