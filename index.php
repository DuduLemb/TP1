<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="jquery/jquery.js"></script>
   <script src="jquery/jquery.js"></script>
    <title>PHP</title>
</head>
<body style="font-size: 20px; font-family: 'Century';">
    <h1>Fiche de renseignement</h1>
    <form action="renseignement.php" method="POST">
        <label>Nom :</label>
        <input type="text" name="nom" id="" class="form-control">
        <label for="">Prenom :</label>
        <input type="text"class="form-control" name="prenom">
        <label for="">Sexe :</label>
        <select name="sexe" id=""class="form-control">
            <option value="Masculin">Male</option>
            <option value="Feminin">Femelle</option>
        </select>
        <label for="">Date :</label>
        <input type="date"class="form-control" name="date">
        <label for="">Lieu de Naissance :</label>
        <input type="text"class="form-control" name="lieu">
        <button type="submit">Valider</button>
        <button type="reset">Effacer</button>
    </form>
</body>
</html>
