<?php
session_start();
var_dump($_SESSION);
$link=mysqli_connect('localhost','yasine','yasine91','cvgenerator');
if(!$link){
	echo " probleme de connexion";
}
else{
	$id = 0;
	$debut = $_POST['debut'];
	$fin = $_POST['fin'];
	$poste = $_POST['poste'];
	$entreprise = $_POST['entreprise'];	
	$description = $_POST['desc'];
	$iduser =$_SESSION['iduser'];	
	$req = "insert into experience values(0,'$debut','$fin','$poste','$entreprise','$description',$iduser)";
	$res= mysqli_query($link,$req);
 if($res){
if(isset($_POST['save'])){
	
	header('Location:user.php');
	
}
else if(isset($_POST['saveAdd'])){
	
	header('Location:exp.php');
}
 }
 else{
	
	 echo mysqli_error($link);
 }
}
?>