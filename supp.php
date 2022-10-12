<?php
$id =$_REQUEST['id'];
$conn =mysqli_connect('127.0.0.1','root','','revision');
$req ="DELETE from etudiant WHERE id=$id";
$result =mysqli_query($conn,$req);
?>
