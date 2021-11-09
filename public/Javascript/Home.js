var partie1 = "<form method='POST' action='index.php'><div class='fond '><div class='affichage'><input type='button' value='×' onclick='cacher();' class='btn-fermer btn-outline-secondary'>";
 
var partie2 = "<input name='email' type='text' class='champ form-control' autocomplete='off' placeholder='Utilisateur'><input name='password' type='password' class='champ form-control' autocomplete='off' placeholder='Mot de passe'>";
 
var partie3 = "<br><br><input  type='submit' class='btn btn-secondary btn-sm border-white bg-white text-black' value='connexion'> <input  type='button' onclick='signUp()' class='btn btn-secondary btn-sm border-white bg-white text-black' value='inscription'></div></div></form>";

function afficher() {
document.getElementById("auth").innerHTML= partie1 + partie2 + partie3;
}
  
function cacher(){
document.getElementById("auth").innerHTML="";
}

function signUp(){
    location.href = "index.php?action=signup";
}