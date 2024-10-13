<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <title>Document</title>
</head>
<body style="font-size: 20px; font-family: 'Century';">
   <?php
       //stocker les identifiants
       $servername="localhost";
       $password="";
       $username="root";
       $database="test1";
       //on établie la connexion
       $conn=mysqli_connect($servername,$username,$password);
       //choix de la base de donnée
       mysqli_select_db($conn,$database);
       $a=$_GET["id"];
       $req="delete from personne where id =".$a.";";
       mysqli_query($conn, $req);
   ?>
   <h1>La suppression a aboutie avec success.</h1>
   <a href="listepersonne.php" class="btn btn-primary">Nouvelle liste de personne</a>
</body>
</html>