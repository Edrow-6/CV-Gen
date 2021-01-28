<?php
session_start();
$link=mysqli_connect('localhost','yasine','yasine91','cvgenerator');
if(!$link){
	echo " probleme de connexion";
}
else{
	$id = 0;
	$dip = $_POST['dip'];
	$annee = $_POST['annee'];
	$ecole = $_POST['ecole'];
	$req = "insert into etude values($id,'$dip','$ecole','$annee')";
	$res= mysqli_query($link,$req);
 if($res){
if(isset($_POST['save'])){
	
	header('Location:exp.php');
	
}
else if(isset($_POST['saveAdd'])){
	
	header('Location:etude.php');
}
 }
 else{
	
	 echo mysqli_error($link);
 }
}
?>