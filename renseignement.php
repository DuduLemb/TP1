<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-size: 20px; font-family: 'Century';">
   <script src="jquery/jquery.js"></script></table>
    <table class="table table-striped">
        <tr>
            <td>Nom</td>
            <td>
                <?php
                    echo $_POST["nom"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td>
                <?php
                    echo $_POST["prenom"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Sexe</td>
            <td>
            <?php
                    echo $_POST["sexe"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Date</td>
            <td>
            <?php
                    echo $_POST["date"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Lieu de naissance</td>
            <td>
            <?php
                    echo $_POST["lieu"];
                ?>
            </td>
        </tr>
    </table>
    <?php
        if(isset($_POST["nom"])){
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
            $req="INSERT INTO personne (Nom,Prenom,Sexe,Date_naissance,Lieu) Values ('".$a."','".$b."','".$c."','".$d."','".$e."');";
            mysqli_query($conn,$req);
        }
        ?>
    je m'appelle <?php echo $_POST["nom"]; echo $_POST["prenom"]; ?> de Genre <?php echo $_POST["sexe"]; ?> nee le <?php echo $_POST["date"]; ?> a <?php echo $_POST["lieu"]; ?> 
    <a href="index.php" class="btn btn-primary">autre fiche de renseignement</a>
    <a href="commentaire.php" class="btn btn-warning">faire un Commentaire</a>
    <a href="listepersonne.php" class="btn btn-info">Voir la liste des personnes</a>
</body>
</html>