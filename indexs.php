<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession=new UserSession();
$user=new User();
//si hay session
if(isset($_SESSION['user'])){
    //echo "hay session";
    $user->setUsername($userSession->getCurrentUser());
    include_once 'vista/homesalomon.php';

}else if(isset($_POST['username'])&& isset($_POST['password'])){
    //echo "Validacion de login";

    $userForm=$_POST['username'];
    $passForm=$_POST['password'];
    if($user->userExists($userForm,$passForm)){
        //echo "usuario validado";
        echo 'Yes';
        $userSession->setCurrentUser($userForm);

        //include_once 'vista/home.php';

    }else{
        //echo "nombre de usuario 0 password incorrecto";
        $errorLogin ="Nombre de usuario y/o password es incorrecto";
        //include_once 'vista/indexsalomon0.php';
        echo 'No';
    }

}else{
    //echo "pantalla login";
    include_once 'vista/indexsalomon0.php';
}

?>
