function Navbar(){
    document.getElementById("navBar").innerHTML = "<input class='nav-item' type='search' id='site-search' name='chercher' placeholder='Rechercher'><ul class='nav-item-ul flex-row' id='nav-ul'><li class='nav-item-li'><a href='./Accueil.html'>Accueil</a></li><li class='nav-item-li'><a href='./Contact.html'>A propos & Contact</a></li><li class='nav-item-li'><a href='./Help.html'>Help</a></li></ul>" ;
    search = document.getElementById("site-search");
    search.addEventListener('keydown', (e) => {
      if (e.key == "Enter"){
        search = document.getElementById("site-search");
        window.location.href = "../Html/Home.html?search="+search.value;
      }
    });
}
function footer(){ // a faire pour avoir le footer sur toutes les pages

}