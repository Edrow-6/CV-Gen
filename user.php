<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Informations user</h2>
  <form action="usertraitement.php" method="POST">
  <div class="form-group">
      <label for="fname">Prénom:</label>
      <input type="text" class="form-control" id="fname" placeholder="Entrez votre prénom" name="fname">
    </div>
	<div class="form-group">
      <label for="lname">Nom:</label>
      <input type="text" class="form-control" id="lname" placeholder="Entrez votre nom" name="lname">
    </div>
	<div class="form-group">
      <label for="bdate">Date de naissance:</label>
      <input type="date" class="form-control" id="bdate" placeholder="Entrez votre date de naissance" name="bdate">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Entrez votre email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Mot de passe:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe" name="pswd">
    </div>
	<div class="form-group">
      <label for="snumber">N° de rue:</label>
      <input type="text" class="form-control" id="snumber" placeholder="Entrez votre n° de rue" name="snumber" pattern="[0-9]{0-3}">
    </div>
	<div class="form-group">
      <label for="street">Nom de rue:</label>
      <input type="text" class="form-control" id="street" placeholder="Entrez votre nom de rue" name="street">
    </div>
	<div class="form-group">
      <label for="pcode">Code Postal:</label>
      <input type="text" class="form-control" id="pcode" placeholder="Entrez votre code postal" name="pcode" pattern="[0-9]{5}">
    </div>
	<div class="form-group">
      <label for="state">Ville:</label>
      <input type="text" class="form-control" id="state" placeholder="Entrez votre ville" name="state">
    </div>
	<div class="form-group">
      <label for="country">Pays:</label>
      <input type="text" class="form-control" id="country" placeholder="Entrez votre pays" name="country">
    </div>
	<div class="form-group">
      <label for="pnumber">Téléphone:</label>
      <input type="text" class="form-control" id="pnumber" placeholder="Entrez votre numéro de téléphone" name="pnumber" pattern="[0-9]{10}">
    </div>
	<div class="form-group">
	  <label for="country">Titre:</label> </br>
      <input type="radio" id="homme" name="titre" value="homme">
	  <label for="homme">Homme</label><br>
	  <input type="radio" id="femme" name="titre" value="femme">
	  <label for="femme">Femme</label><br>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
      </label>
    </div>
    <button type="submit" name="save" class="btn btn-primary">Enregistrer</button>
  </form>
</div>
</body>
</html>