<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   <title>Document</title>
</head>
<body>
   <script src="jquery/jquery.js"></script>
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
            $requete="SELECT * FROM personne ;";
            $resultat = mysqli_query($conn,$requete);
      ?>
      <table class = "table table-bordered table-hover table-striped table-secondary" style="font-size: 20px; font-family: 'Century';">
         <tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Sexe</th><th>Date de naissance</th><th>lieu</th><th>Action</th></tr>
         <?php
               while($donnee=mysqli_fetch_array($resultat)){
               echo"<tr>";
               echo"<td>";
               echo $donnee["id"];
               echo"</td>";
               echo"<td>";
               echo $donnee["Nom"];
               echo"</td>";
               echo"<td>";
               echo $donnee["Prenom"];
               echo"</td>";
               echo"<td>";
               echo $donnee["Sexe"];
               echo"</td>";
               echo"<td>";
               echo $donnee["Date_naissance"];
               echo"</td>";
               echo"<td>";
               echo $donnee["Lieu"];
               echo"</td>";
               echo"<td><a href='modifier.php?id=".$donnee['id']."' class='btn btn-warning'>Modifier</a> <a href='delete.php?id=".$donnee['id']."' class='btn btn-danger'>Supprimer</a></td>";
               echo"</tr>";
               }
         ?>
      </table>
</body>
</html>