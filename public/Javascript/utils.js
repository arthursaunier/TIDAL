// Récupere les parametre de l'url
function getParameter(p){
    var url = window.location.search.substring(1);
    var varUrl = url.split('&');
    for (var i = 0; i < varUrl.length; i++)
    {
        var parameter = varUrl[i].split('=');
        if (parameter[0] == p)
        {
            return decodeURIComponent(parameter[1]);
        }
    }
}

function generateRandomString(){
    var characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result1= '';
    const charactersLength = characters.length;
    for ( let i = 0; i < 10; i++ ) {
        result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    return result1;
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;


}
