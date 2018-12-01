<html>
   <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script type="text/javascript" src="scriptRouting.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">

</script>
<link rel="stylesheet" href="styleprofile.css">
<meta charset="utf-8">
<title>Profile</title>
</head> 
<body>
<header>
    <!--Resultat header-->
<div class="jumbotron">
    <div class="container">
<?php
error_reporting(0);
include 'config.php';
$cin_u = $_REQUEST['cinEt'];
try {
    $q = "select cin from lists where cin=$cin_u";
    $data = $con->query($q);
    if ($data->fetchColumn()>0) {

        foreach($con->query($q) as $row) {
                print "Cin" . $row['cin'] . "\n";
        }

} else {
        echo "S.V.P Entrer une cin valid <a href='#!esp'>logIn</a> ";  
}

}catch (PDOException $e) {
    echo "Failed ". $e->getMessage();
}


?>
</body>
<?php 
?>
</html>