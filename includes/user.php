<?php
include_once 'db.php';

class User extends DB{
    //para obtener los datos

    private $username;
    //funcion para registrar usuario
    public function userRegister($username,$password,$nick_name,$email,$country,$university,$captca){
        // code...
        $sql="insert into usertable(username,password_user,nick_name,email,country,university,captcha)values('$username','$password','$nick_name','$email','$country','$university','$captca')";
        $rs=pg_query($this->connect(),$sql);
        if($rs){
            return true;
        }else{
            return false;
        }
    }
    public function userUpdate($username,$password,$nick_name,$email,$country,$university,$captca){
        $sql="update usertable set password_user='$password',nick_name='$nick_name',email='$email',country='$country',university='$university',captcha='$captca' where username='$username'";
        $rs=pg_query($this->connect(),$sql);
        if($rs){
            return true;
        }else{
            return false;
        }
    }
    public function getUser($username){
        // code...
        $sql="select *from usertable where username='$username'";
        $rs=pg_query($this->connect(),$sql);

        if($rs){
            $obj=pg_fetch_object($rs);
            return $obj;
        }else{
            echo "error consulta";
        }
        
    }
    public function userExists($user,$pass){
      // code...
      $sql="select *from usertable where username='$user' and password_user='$pass'";

      $rs=pg_query($this->connect(),$sql);
      $exist=false;
      if($rs){
        if(pg_num_rows($rs)>0){
          $exist=true;
          $obj=pg_fetch_object($rs);
          $this->username=$obj->username;
        }else{
            $exist=false;
          //echo "no se encotraron personas";
        }
      }else{
          $exist=false;
          //echo "no se realizo la consulta con exito";
      }
      return $exist;
    }
    public function setUsername($user){
        // code...
        $this->username=$user;
    }
    public function getUsername(){
      // code...
      return $this->username;
    }


}



?>
