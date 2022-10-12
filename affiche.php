<?php
$conn =mysqli_connect('127.0.0.1','root','','revision');
$req ="SELECT * from etudiant";
$result =mysqli_query($conn,$req);
$tab =mysqli_fetch_all($result);
$chaine= "<table border='1px'>
<tr><td>nom</td><td>prenom</td><td>note</td><td>code</
td></tr>";
foreach($tab as $ligne )
{
$chaine=$chaine."<tr><td>$ligne[1]</td><td>$ligne[2]</td><td>$ligne[3]</td><td>$ligne[4]</
td></tr>";
}
$chaine=$chaine."</table>";
echo $chaine;
?>

