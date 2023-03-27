let tabs = document.querySelectorAll(".tab-link:not(.desactive)");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    unSelectAll();
    tab.classList.add("active");
    let ref = tab.getAttribute("data-ref");
    document
      .querySelector(`.tab-body[data-id="${ref}"]`)
      .classList.add("active");
  });
});

function unSelectAll() {
  tabs.forEach((tab) => {
    tab.classList.remove("active");
  });
  let tabbodies = document.querySelectorAll(".tab-body");
  tabbodies.forEach((tab) => {
    tab.classList.remove("active");
  });
}

document.querySelector(".tab-link.active").click();


document.forms["formsend"].addEventListener("submit", function(e) {

 
  var erreur;
       
  var inputs = this;
       
  // Traitement générique
  for (var i = 0; i < inputs.length; i++) {
    console.log(inputs[i]);
    if (!inputs[i].value) {
      erreur = "Veuillez renseigner tous les champs";
      break;
    }
  }
       
  if (erreur) {
    e.preventDefault();
    document.getElementById("erreur").innerHTML = erreur;
    return false;
  } else {
       alert('Formulaire envoyé !');
  }
        
});