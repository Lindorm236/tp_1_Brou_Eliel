<html>
    <head><head>
        <body bgcolor="skyblue">
</body>

</html>
<?php
//Validation du mot de passe
if($_POST){
    $password=$_POST['pass'];
    if(empty($password)){
        echo"</br>Champ vide, veuillez entrer votre mot de passe";
    }
    else{

        function validPassword( $password){

            $length = strlen($password);
        
            $verif=[
                'validation'=>true,
                'message'=>''
            ];
            if($length <6){
                $verif=[
                    'validation'=>false,
                    'message'=>'Nom trop court'
                ];
            }
            elseif($length>10){
                $verif=[
                    'validation'=>false,
                    'message'=>'Nom trop long'
                ];
            }
            return $verif;
         }
        //Construction du mot de passe salé et concaténation
         function aLittleSalt($passwordToSalt){
            
            $salt1='frappeMétéore';
            $salt2='tirTricolore';
            $saltedPassword=$salt1.$passwordToSalt.$salt2;
        
            return $saltedPassword;
        }
       
    }
}

 

?>