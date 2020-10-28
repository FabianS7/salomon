<?php
  //$pdo=new PDO('pdo_pgsql');
  $servidor="localhost";
  $port="5432";
  $db="salomon";
  $nombreusuario="postgres";
  $password="evelyn123";


  //$conection=pg_connect("host=$servidor,");
  $conection=pg_connect("host=".$servidor." port=".$port." dbname=".$db." user=".$nombreusuario." password=".$password) or die("Error al conectar: ".pg_last_error());
  if($conection){
    echo "<h1>me conecte</h1>";
  }else{
    echo "<h1>no me conecte</h1>";
  }

  function InsertarUsuario($conexion,$username,$password,$nickname,$email,$country,$university,$captcha)
  {
    $sql="insert into usertable(username,password_user,nick_name,email,country,university,captcha)values('$username','$password','$nickname','$email','$country','$university','$captcha')";
    return pg_query($conexion,$sql);
  }

  function modificarUsuario($conexion,$username,$newusername,$password,$nickname,$email,$country,$university)
  {
    //$sql="insert into usertable(username,password_user,nick_name,email,country,university,captcha)values('$username','$password','$nickname','$email','$country','$university','$captcha')";
    $sql="update usertable set username='$newusername',password_user='$password',nick_name='$nickname',email='$email',country='$country',university='$university' where username='$username'";
    return pg_query($conexion,$sql);
  }
  $result=modificarUsuario($conection,"fabian","grovers7","123","queviva","asdf@gmail.com","bolivia","unsxx");
  if($result){
    echo "yes";
  }else{
    echo "no";
  }

  $result=InsertarUsuario($conection,"fabian","123","queviva","asdf@gmail.com","bolivia","unsxx","2");
  if($result){
    echo"registrado";
  }else{
    echo "no registrado";
  }


?>
