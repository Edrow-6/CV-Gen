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
  <h2>Expériences professionnelles</h2>
  <form action="exptraitement.php" method="POST">
  <div class="form-group">
      <label for="debut">Date de début:</label>
      <input type="date" class="form-control" id="debut" placeholder="Entrez le poste occupé" name="debut">
    </div>
	<div class="form-group">
      <label for="fin">Date de fin:</label>
      <input type="date" class="form-control" id="fin" placeholder="Entrez le poste occupé" name="fin">
    </div>
	<div class="form-group">
      <label for="comp">Poste:</label>
      <input type="text" class="form-control" id="poste" placeholder="Entrez le poste occupé" name="poste">
    </div>
	<div class="form-group">
      <label for="entreprise">Entreprise:</label>
      <input type="text" class="form-control" id="entreprise" placeholder="Entrez le poste occupé" name="entreprise">
    </div>
	<div class="form-group">
      <label for="desc">Description:</label>
      <input type="text" class="form-control" id="desc" placeholder="Entrez le poste occupé" name="desc">
    </div>

    <button type="submit" name="save" class="btn btn-primary">Enregistrer</button>
	<button type="submit" name="saveAdd" class="btn btn-primary">Ajouter une autre expérience</button>
	
  </form>
</div>
</body>
</html>