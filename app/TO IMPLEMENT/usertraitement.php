<?php
session_start();
$link=mysqli_connect('localhost','yasine','yasine91','cvgenerator');
if(!$link){
	echo " probleme de connexion";
}
else{
	$id = 0;
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$bdate = $_POST['bdate'];
	$email = $_POST['email'];
	$pswd = $_POST['pswd'];
	$snumber = $_POST['snumber'];
	$street = $_POST['street'];
	$pcode = $_POST['pcode'];
	$street = $_POST['street'];
	$country = $_POST['country'];
	$pnumber = $_POST['pnumber'];
	$titre = $_POST['titre'];
	$req = "insert into user values($id,'$fname','$bdate','$lname','$email','$pswd','$pnumber','$snumber','$street','$pcode','$state','$country','null','0')";
	$res= mysqli_query($link,$req);
 if($res){
	$_SESSION['iduser']=mysqli_insert_id($link);
if(isset($_POST['save'])){
	
	header('Location:comp.php');
	
}
else if(isset($_POST['saveAdd'])){
	
	header('Location:user.php');
}
 }
 else{
	
	 echo mysqli_error($link);
 }
}
?>