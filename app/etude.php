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
  <h2>Etudes</h2>
  <form action="etudetraitement.php" method="POST">
  <div class="form-group">
      <label for="dip">Diplôme:</label>
      <input type="text" class="form-control" id="dip" placeholder="Entrez votre diplôme" name="dip">
	  <label for="annee">Année:</label>
      <input type="text" class="form-control" id="annee" placeholder="Entrez l'année d'obtention du diplôme" name="annee" pattern="[0-9]{4}">
	  <label for="ecole">Ecole:</label>
      <input type="text" class="form-control" id="ecole" placeholder="Entrez l'école où vous avez obtenu votre diplôme" name="ecole">
    </div>
    <button type="submit" name="save" class="btn btn-primary">Enregistrer</button>
	<button type="submit" name="saveAdd" class="btn btn-primary">Ajouter un autre diplôme</button>
	
  </form>
</div>
</body>
</html>