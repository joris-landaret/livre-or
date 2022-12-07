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
    <title>livre d'or</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/commentaire.css">
</head>

<body>
    <?php include('header.php') ?>
    <main>

        <div>
            <h1>Commentaire</h1>
            
            <form action="" method="post">

                <table border="5" cellspacing="5" cellpadding="5" bgcolor=""> 
                    <tr> 
                        <th>login</th>
                        <th>date</th> 
                        <th>commentaire</th>
                    </tr> 
                    <tr>
                        <td>login 1</td>
                        <td>date 1</td>
                        <td>commentaire 1</td> 
                    </tr>
                    <tr>
                        <td>login 2</td>
                        <td>date 2</td>
                        <td>commentaire 2</td> 
                    </tr>
                </table>
            </form>
        </div>

    </main>
    <?php include('footer.php') ?>
</body>

</html>