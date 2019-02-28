$(document).ready(function(){
     $(".container-0").submit(function(){
         if($(".champ-1").val()=="")
        {
            alert("Vous devez remplir ces champ !");
            return false;
        }

    });


function control()
{
    var valid = 1;
    var msg = "";
    var nom = getObjetByClassName("champ-1");
    var prenom = getObjetByClassName("champ-2");
    var adresse = getObjetByClassName("champ-3");
    // var  = getObjetByClassName("champ")
if(nom.value.length < 1 || prenom.value.length < 1)
{
    alert("Vous devez donner votre nom prenom adresse!");
    msg = "Vous devez donner votre nom prenom adresse!\n";
    valid = 0;
}


}


// if(nom.value.length < 1 || prenom.value.length < 1)
//   {
//     //alert("Vous devez donner votre nom et prénom !");
//     msg = "Vous devez donner votre nom et prénom !\n";
//     valid = 0;
//   }
















});