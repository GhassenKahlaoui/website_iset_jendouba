<!DOCTYPE html>
<html>
    <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="script/pnaelanimation.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script type="text/javascript" src="script/scriptRouting.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet"  href="styles/styleacceuil.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">

</script>
<meta charset="utf-8">
<title>Accueil</title>
</head>
<body ng-app="myApp">

<!--Menu-->

<header>
    <div class="bg">
        <img src="images/DPTUNISIE.jpg" style="width:40px">Ministère de l’Enseignement Supérieur et de la Recherche Scientifique 
<div class="jumbotron jumbotron-fluid">
    <div class="container">
            <img src="isetj.png" class="float-right"> 
        <center>
        
        <h3 class="display-3">Direction Générales des Etudes Technologiques            </h3>
        
        <p class="lead">Institut Supérieur des Etudes Technologiques de Jendouba</p>
            <hr>
            
        </div>
        </form>
    </center>
    </div>
</div>



    <nav>
        <!--Begin Of navbar-->
        <div id="list" class="list-group">
<div class="container" id="menu">
    <div class="row">
<!--Accueil-->
        <div class="col-md-3">
<!--Card style-->
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Actualité</h5>
                <p class="card-text">
                     actualité des clubs  , actualité des resultats de stage et de semestres 
                    <a href="#!red" id="actualite" class="btn btn-primary card-link">Allez à Accueil </a>
                </p>
                <!--fin de la card body -->
            </div>


            <!--fin card Accueil-->
            </div>



            <!--Fin Accueil-->
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Présenation</h5>
                <p class="card-text">
                    Mot du directeur , Institut , Historique & Infrastructure
                    <a href="#" id="presentation" class="btn btn-primary card-link ">Allez à Présentation </a>
                </p>
                
                <!--fin de la card Presentation-->
            </div>
        </div>
            <!--finde Prsentation-->
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                        <h5 class="card-title">stage et projet</h5>
                    <p class="card-text">
                        Les stages , les modalité , Les projets de Fin d'etudes
                        <a href="#" id="stage_projet"class="btn btn-primary card-link">Allez a stage et projet</a>

                    </p>
                </div>
                <!--fin de la card de Stage Et presentation -->
            </div>

            <!--fin column stage et projet -->
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Formation Continue</h5>
                    <p class="card-text">
                        Public ciblé , Service offert par l'iset de Jendouba ( a cours terme - A moyen terme & a long terme) , 
                        Atout de la formation
                        <a href="#" id="fc"class=" btn btn-primary card-link ">Aller à Formation Continue</a>
                    </p>

                </div>
                <!--fin de la card de Formation Continue-->
            </div>

            <!--fin de la column Formation Continue-->
        </div>
    </div>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Département</h5>
                <p class="card-text">départemenst informatique , 
                    Département Electrique , Département Mecanique , Département administartion des affaires
                    <a href="#" id="dep" class="btn btn-primary card-link ">Aller à Département</a>
                </p>

            </div>
            <!--end card of departements -->
        </div>

        <!--End of  depratement column-->
    </div>
    <div class="col-md-3">
<div class="card">
<div class="card-body">
<h5 class="card-title">Espace</h5>
<p class="card-text">Espace Etudiant & espace Enseignant
    <a href="#" id="esp" class="btn btn-primary card-link">Aller à espace</a>
</p>
</div>

    <!--End of card Espace-->
</div>

        <!--End of Espace column-->

    </div>

    <div class="col-md-3">
<div class="card">
<div class="card-body">
<h5 class="card-title">Contact</h5>
<p class="card-text">Contacter Nous 
    <a href="#" id="contact" class="btn btn-primary card-link">Aller à Contact</a>
</p>

</div>

</div>

<!--End of Contact column-->
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lien Utile</h5>
                <p class="card-text">
                    site de Ministére de l'education supérieur , plateforms Université virtuel de tunis , inscription.tn 
                et autre lien
                    <a href="#" id="link" class="btn btn-primary card-link">Aller à Lien Utile </a>
            </p>
            </div>
        </div>
        <!--End of Lien Utile Column-->
    </div>
</div>
</div>

   
</div>
</div> <!--End of list-group-->
</div>
</nav>
</header>
<div ng-view></div>

<!-- Footer -->
<!--Footer-->
<footer>
    <div class="panel">
    <div class="panel-body">
    <center>
    <h3> &copy; 2018 - <a href="www.isetj.rnu.tn"> Iset Jendouba </a></h3>
    </center>
    <!--Fin de panel body-->
    </div>
    </div>



</body>
</html>
