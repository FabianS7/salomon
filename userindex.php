<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession=new UserSession();
$user=new User();

if(isset($_POST['username_register'])&& isset($_POST['password_register'])){
    //echo "Validacion de login";
    //echo 'entrouser';


    $userR=$_POST['username_register'];
    $passR=$_POST['password_register'];
    $nick_nameR=$_POST['nick_name'];
    $emailR=$_POST['email'];
    $countryR=$_POST['country'];
    $universityR=$_POST['university'];
    $captcaR=$_POST['captcha'];
    //echo 'entrouser';

    if($user->userExists($userR,$passR)){
        //echo "usuario para registar";
        //echo "nombre de usuario 0 password incorrecto";
        $errorRegister ="El usuario ya existe";
        //include_once 'vista/indexsalomon0.php';
        echo 'No';


    }else{
        //libre para registar
        //echo $emailR;
        $rs=$user->userRegister($userR,$passR,$nick_nameR,$emailR,$countryR,$universityR,$captcaR);

        if($rs){
            echo 'Yes';
            $userSession->setCurrentUser($userR);
        }else{
            echo 'No';
        }

        //echo 'puedes registar';
    }

}else{
    //para update
    if(isset($_POST['username_update'])&& isset($_POST['password_update'])){
        //existen los variables
        //echo 'existe';

        $userU=$_POST['username_update'];
        $passU=$_POST['password_update'];
        $newpassU=$_POST['newpassword_update'];
        $nick_nameU=$_POST['nick_name'];
        $emailU=$_POST['email'];
        $countryU=$_POST['country'];
        $universityU=$_POST['university'];
        $captcaU=$_POST['captcha'];
        //echo 'entrouser';

        if($user->userExists($userU,$passU)){


            //libre para registar
            //echo $emailU;
            $rs=$user->userUpdate($userU,$newpassU,$nick_nameU,$emailU,$countryU,$universityU,$captcaU);

            if($rs){
                echo 'Yes';
                //$userSession->setCurrentUser($userU);
            }else{
                echo 'No';
            }

            //echo 'puedes registar';

        }else{
            //echo "usuario para registar";
            //echo "nombre de usuario 0 password incorrecto";
            $errorRegister ="error el password original no es";
            //include_once 'vista/indexsalomon0.php';
            echo 'Nopass';
        }


    }else{
        echo 'No hay varibles';
    }
}














?>
