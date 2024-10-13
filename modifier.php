<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="jquery/jquery.js"></script>
   <title>Document</title>
</head>
<body>
<form action="" method="POST">
   <input type="hidden" value="<?php
       $_POST["id"]
   ?>" name="id">
   <label>Nom :</label>
   <input type="text" name="nom" id="" class="form-control" name="nom" value="<?php
       $_POST["nom"]
   ?>">
   <label for="">Prenom :</label>
   <input type="text"class="form-control" name="prenom" value="<?php
       $_POST["prenom"]
   ?>" name="prenom">
   <label for="">Sexe :</label>
   <select name="sexe" id=""class="form-control" value="<?php
       $_POST["sexe"]
   ?>" name="sexe">
      <option value="Masculin">Male</option>
      <option value="Feminin">Femelle</option>
   </select>
   <label for="">Date :</label>
   <input type="date"class="form-control" name="date" value="<?php
       $_POST["date"]
   ?>" name="date">
   <label for="">Lieu de Naissance :</label>
   <input type="text"class="form-control" name="lieu" value="<?php
       $_POST["lieu"]
   ?>" name="lieu">
   <button type="submit" class="btn">Valider</button>
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
            $a=$_POST["nom"];
            $b=$_POST["prenom"];
            $c=$_POST["sexe"];
            $d=$_POST["date"];
            $e=$_POST["lieu"];
            $f=$_POST["id"];
            $requete="UPDATE FROM personne  SET Nom='".$a."' , Prenom='".$b."', Sexe='".$c."', Date_naissance='".$d."'; Lieu='".$e."' WHERE id='".$f."';";
            $resultat = mysqli_query($conn,$requete);
      ?>
   <button type="reset" class="btn">Effacer</button>
</form>
</body>
</html>