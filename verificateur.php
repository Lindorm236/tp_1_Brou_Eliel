<?php
 require_once("concepteur.php");

//exécuteur de la validation 
if($_POST){
    $password=$_POST['pass'];
    if(empty($password)){
        echo"</br><h2><center>Champ vide, veuillez réessayer !!</center></h2>";
    }
    else{
        $validPassword = validPassword($_POST['pass']);
 echo'</br>';


echo'</br></br>';
//Utilisation des fonctions de sel et d'encodage 
$saltedPassword = aLittleSalt($_POST['pass']);
echo("Votre mot de passe avec le sel est : ".$saltedPassword);
echo'</br></br>';
$encodedPassword = encodePassword($_POST['pass']);
echo("Votre mot de passe encodé est : ".$encodedPassword);
echo"<br><br>";

    }
}
 


?>


<a href="./index.php"><center>Retourner à la page précédente</center></a><br>
<a href="./terminal.php"><center>Aller à la page suivante</center></a>