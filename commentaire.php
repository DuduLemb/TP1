<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <script src="jquery/jquery.js"></script>
   <script src="commentaire.js"></script>
    <title>Document</title>
</head>
<body style="font-size: 20px; font-family: 'Century';">
    <h1>Ajouter un Commentaire</h1>
    <form action="#" method="GET" class="form-control">
        <label for="">Nom :</label><br>
        <input type="text" name="nom" id="nom" class="form-control"><br>
        <label for="">Message :</label><br>
        <textarea name="message" id="message" cols="20" rows="10"></textarea><br>
        <button type="submit" class="btn btn-danger" id="valider">Valider</button><br>
    </form>
    <p><?php
        if(isset($_GET["nom"])){
            //stocker les identifiants
            $servername="localhost";
            $password="";
            $username="root";
            $database="test1";
            //on établie la connexion
            $conn=mysqli_connect($servername,$username,$password);
            //choix de la base de donnée
            mysqli_select_db($conn,$database);
            echo "Nom :".$_GET["nom"];
            echo "Message :".$_GET["message"];
            $a=$_GET["nom"];
            $b=$_GET["message"];
            $req="INSERT INTO commentaire (nom,message) Values ('".$a."','".$b."');";
            mysqli_query($conn,$req);
        }
    ?></p>
</body>
</html>