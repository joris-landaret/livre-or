<?php
session_start();
// connection à la base de donné
include('connect.php');

$request = $mysqli -> query("SELECT * FROM utilisateurs");

$request_fetch_all = $request -> fetch_all();

var_dump($request_fetch_all);
//echo "ok";
//$_SESSION['login'] = $user[1];
if(isset($_POST['envoi'])){
    
    //si les champs sont remplis
    if($_POST['commment']){
        
        $comment = $_POST['commment'];

        $mysqli = new mysqli("localhost","root","","livreor",3307);

        $request = $mysqli -> query("SELECT * FROM commentaires");

        $request_fetch_all = $request -> fetch_all();

        var_dump($request_fetch_all);

        $sql = "INSERT INTO `commentaires` (`commentaire`,`id_utilisateur`,`date`) 
        VALUE ('$comment',".$_SESSION['id'].", NOW() )";
        $request2 = $mysqli -> query($sql);
        //echo "ok";
        //header("location:connexion.php");
        
    }
    else{echo "veuillez remplir tous les champs";}
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/commentaire.css">
</head>

<body>
    <?php include('header.php') ?>
    <main>

        <div>
            <h1>Commentaire</h1>
            
            <form action="" method="post">
                
                <label for="commentaire">Insérer votre commentaire</label>
                <textarea name="commment" cols="10" rows="10" wrap="hard"></textarea>

                <input type="submit" name="envoi">
            </form>
        </div>

    </main>
    <?php include('footer.php') ?>
</body>

</html>