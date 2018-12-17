<?php


if(isset($_POST['submit'])) {

  if( ($_POST['cinEt']!=NULL) && (strlen($_POST['cinEt'])==8) ) { 
    $cin = $_POST['cinEt'];
    header("location:$cin");  
  } 
}
?>


<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="stylelogin.css">
<meta charset="utf-8">

</head>
<body>
  <!--form pour login-->
  <header>
<form method="POST" enctype="multipart/form-data">
<input type="text" name="cinEt">
<input type="submit" value="envoyer" name="submit" class="btn btn-primary">

</form>
</header>

<div class="panel panel-default">
<div class="panel-body">
&copy; 2018 - <a href="https://www.isetj.rnu.tn">Iset jendouba</a>
</div>
</div>
</body>
</html>