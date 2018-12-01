/***************Developper  : kahlaoui Mohamed ghassen ********************** */
/***************CopyRight : 2018          ********************************** */

/************************************************************************* */
// this Script for Make our Application a SPA
/************************************************************************ */
/**********first initialize the ngRoute  */
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/acc", {
        templateUrl : "../pages/actualite.html"
    })
    .when("/presentation", {
        templateUrl : "../pages/presentation.html"
    })
    .when("/stage_pfe", {
        templateUrl : "../pages/stage_pfe.html"
    })
    .when("/FormContinue", {

        templateUrl : "../pages/FormContinue.html"
    })
    .when("/departement",{
        templateUrl : "../pages/dep.html"
    })
    .when("/esp",{

        templateUrl : "../pages/login"
    })
    .when("/contact",{
        templateUrl : "../pages/contact.html"
    })
    .when("/Link", {
        templateUrl : "../pages/lien.html"
    });
});