<?php
error_reporting(0);
include 'config.php';
$cin_u = $_GET['c'];
try {
    $q = "select * from lists where cin=$cin_u";
    $data = $con->query($q); 
    echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
    <tr> 
    <th> Cin </th> 
    <th>Nom  </th>
    <th> prenom</th>
    <th> Filliere </th>
    </tr>
    ';
    foreach( $data as $row ) {
        echo '
        <tr>
        <td>'.$row["cin"].' </td>
        <td>'.$row["nom"].' </td>
        <td> '.$row["prenom"]. '</td>
        <td>'.$row["resultat"]. '</td>
        </tr>
        ';

    }



}catch (PDOException $e) {
    echo "Failed ". $e->getMessage();
}


?>