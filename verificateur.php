<?php
 require_once("concepteur.php");


if($_POST){
    $password=$_POST['pass'];
    if(empty($password)){
        echo"</br>Champ vide, veuillez réessayer !!";
    }
    else{
        $validPassword = validPassword($_POST['pass']);
 echo'</br>';


echo'</br></br>';

$saltedPassword = aLittleSalt($_POST['pass']);
echo("Votre mot de passe avec le sel est : ".$saltedPassword);
echo'</br></br>';
$encodedPassword = encodePassword($_POST['pass']);
echo("Votre mot de passe encodé est : ".$encodedPassword);
echo"<br><br>";

    }
}
 


?>


<a href="./index.php">Retourner à la page précédente</a>&emsp;
<a href="./terminal.php">Aller à la page suivante</a>