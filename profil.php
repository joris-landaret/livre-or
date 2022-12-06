<?php
session_start();
// connection à la base de donné
include('connect.php');

$request = $mysqli -> query("SELECT * FROM utilisateurs");

$request_fetch_all = $request -> fetch_all();

var_dump($request_fetch_all);
//echo "ok";

if(isset($_POST['log_envoi'])){
    
    //si les champs sont remplis
    if($_POST['login']){
        
        $login = $_POST['login'];

        //si les passwords son identique 
        //if ($pass == $confirmpass){
            

            //si login n'est pas le même
            //$log_ok = false;
                
            /*foreach($request_fetch_all as $user){
                if($login == $user [1]){
                    $log_ok = false;
                    //break;
                }
                else{$log_ok = true;}
            }*/
            
            //if($log_ok == true){

                $sql = "UPDATE `utilisateurs` (`login`) 
                VALUE ('$login')";
                $request2 = $mysqli -> query($sql);
                //echo "ok";
                //header("location:connexion.php");

            //}
            //else{echo "Le nom du login est déja utilisé";}
            
        //}
        //else{echo "les mots de passes ne sont pas identique";}
    }
    //else{echo "veuillez remplir tous les champs";}
}

//appuyé sur le bouton submit
if(isset($_POST['envoi'])){
    
    //si les champs sont remplis
    if($_POST['password'] && $_POST['confirmpassword']){
        
        $pass = $_POST['password'];
        $confirmpass = $_POST['confirmpassword'];

        //si les passwords son identique 
        if ($pass == $confirmpass){
            

            //si login n'est pas le même
            //$log_ok = false;
                
            /*foreach($request_fetch_all as $user){
                if($login == $user [1]){
                    $log_ok = false;
                    //break;
                }
                else{$log_ok = true;}
            }*/
            
            //if($log_ok == true){

                $sql = "UPDATE `utilisateurs` (`password`) 
                VALUE ('$pass')";
                $request2 = $mysqli -> query($sql);
                echo "ok";
                //header("location:connexion.php");

            //}
            //else{echo "Le nom du login est déja utilisé";}
            
        }
        else{echo "les mots de passes ne sont pas identique";}
    }
    //else{echo "veuillez remplir tous les champs";}
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
    <link rel="stylesheet" href="css/inscription.css">
</head>

<body>
    <?php include('header.php') ?>
    <main>

        <div>
            <h1>Profil</h1>
            <form action="" method="post">
                <label for="login">Login change</label>
                <Input type="text" name="login">
                <input type="submit" name="log_envoi">

                <label for="password">Password change</label>
                <Input type="text" name="password">

                <label for="confirmpassword">password Confirmation</label>
                <Input type="text" name="confirmpassword">

                <input type="submit" name="envoi">
            </form>
        </div>

    </main>
    <?php include('footer.php') ?>
</body>

</html>