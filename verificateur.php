<?php
 require_once("concepteur.php");

 //var_dump($_POST);



if($_POST){
    $password=$_POST['pass'];
    if(empty($password)){
        echo"</br>Champ vide, veuillez réessayer !!";
    }
    else{
        $validPassword = validPassword($_POST['pass']);
 echo'</br>';
var_dump($validPassword);

echo'</br></br>';

$saltedPassword = aLittleSalt($_POST['pass']);
echo("Votre mot de passe avec le sel est".$saltedPassword);
echo'</br>';
    }
}
 


?>


<a href="./index.php">Retourner à la page précédente</a>