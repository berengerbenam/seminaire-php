<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$note = $_POST['note'];

$conn = mysql_connect("127.0.0.1","root","","revision");
$req ="INSERT INTO etudiant(nom,prenom,note) VALUES ($nom,$prenom,$note)";
$result=mysqli_query($conn,$req);

?>
