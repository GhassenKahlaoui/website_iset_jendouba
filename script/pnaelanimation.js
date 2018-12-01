/*************** Author : kahlaoui Mohamed Ghassen ************* */
/****************CopyRight : 2018******************************* */

// menu component 
var menit ="<div class='menuit'><table class='table'><thead class='thead-dark'><tr>"+
"<th class='col'><a href='#'onclick='re()'>Accueil</a></th>"+
"<th class='col'><a href='#!presentation'>presentation</a></th>"+
"<th class='col'><a href='#!stage_pfe'>Stage Et projet</a></th>"+
"<th class='col'><a href='#!FormContinue'>Formation Continue</a></th>"+
"<th class='col'><a href='#!departement'>Departement </a></th>"+
"<th class='col'><a href='#!esp'>Espace</a></th>"+
"<th class='col'><a href='#!contact'>Contact</a></th>"+
"<th class='col'><a href='#!Link'>Lien Utile</a></th>"

+"</thead></tr></table></div>";

$(document).ready(function(){
  

 $(".card-link").click(function(){

$("nav").toggle(1000);
$(".lead").after(menit);

    //end of Click on card-link 
 })




    //End of submit_btn click event


    //fin de l'initialization
});





function re() {

    location.reload();

}

