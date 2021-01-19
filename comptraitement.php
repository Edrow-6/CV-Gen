<?php
session_start();
$link=mysqli_connect('localhost','yasine','yasine91','cvgenerator');
if(!$link){
	echo " probleme de connexion";
}
else{
	$id = 0;
	$comp = $_POST['comp'];
	$req = "insert into competence values($id,'$comp')";
	$res= mysqli_query($link,$req);
 if($res){
if(isset($_POST['save'])){
	
	header('Location:etude.php');
	
}
else if(isset($_POST['saveAdd'])){
	
	header('Location:comp.php');
}
 }
 else{
	
	 echo mysqli_error($link);
 }
}
?>