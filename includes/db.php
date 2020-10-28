<?php

class DB{
    private $servidor;
    private $port;
    private $db;
    private $username;
    private $password;

    public function __construct(){


        $this->servidor="localhost";
        $this->port="5432";
        $this->db="salomon";
        $this->username="postgres";
        $this->password="evelyn123";
        //echo "yes";
    }

    public function connect(){


        $conection=pg_connect("host=".$this->servidor." port=".$this->port." dbname=".$this->db." user=".$this->username." password=".$this->password) or die("Error al conectar: ".pg_last_error());
        return $conection;
    }
}
/*
$mi_ob=new DB();

//$mi_ob->connect();
//mi_ob->connect();
if($mi_ob->connect()){
  echo "yes";
}else{
  echo "no";
}*/
?>
