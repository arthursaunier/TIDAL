var partie1 = "<div class='fond'><div class='affichage'><input type='button' value='×' onclick='cacher();' class='btn-fermer'>";
 
var partie2 = "<input type='text' class='champ' autocomplete='off' placeholder='Utilisateur'><input type='text' class='champ' autocomplete='off' placeholder='Mot de passe'>";
 
var partie3 = "<br><br><input  type='submit' class='btn' value='connexion'></div></div> <input  type='submit' value='inscription'></div></div>";
 
function afficher() {
document.getElementById("auth").innerHTML= partie1 + partie2 + partie3;
}
  
function cacher(){
document.getElementById("auth").innerHTML="";
}