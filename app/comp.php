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
  <h2>Compétences</h2>
  <form action="comptraitement.php" method="POST">
  <div class="form-group">
      <label for="comp">Votre compétence:</label>
      <input type="text" class="form-control" id="comp" placeholder="Entrez une compétence" name="comp">
    </div>
    <button type="submit" name="save" class="btn btn-primary">Enregistrer</button>
	<button type="submit" name="saveAdd" class="btn btn-primary">Ajouter une autre compétence</button>
	
  </form>
</div>
</body>
</html>