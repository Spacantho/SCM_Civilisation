
var navburger = document.getElementById("nav-burger");
var navburgerlist = document.getElementById("nav-burger-list");

var navconnexion = document.getElementById("nav-connexion");
var connexionsite = document.getElementById("connexionsite");

navburger.addEventListener("click", () => {

    if (getComputedStyle(navburgerlist).display  == "none")
    {
        navburgerlist.style.display  = "block";
    }
    else {
        navburgerlist.style.display  = "none";
    }
    
})


navconnexion.addEventListener("click", () => {

    if (getComputedStyle(connexionsite).display == "none")
    {
        connexionsite.style.display = "block";
    }
    else {
        connexionsite.style.display = "none";        
    }
    
})




// function closeConnexion() {
//     document.getElementById("connexionsite").style.display = "block"
// }

// window.addEventListener('click', function(e){

//     var openconnexion = false;


//           if ("connexionsite".contains(e.target)){
//             openconnexion = true
//           }

//     if (!document.getElementById("connexionsite").contains(e.target)){
//      if (!openconnexion){closeConnexion()}
//   }

// })
