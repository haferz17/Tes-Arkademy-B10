<?php
  class database{
    var $host='localhost';
    var $uname='root';
    var $pass='';
    var $dbase='arkademy';
    protected $a;

    function __construct(){
        $this->a=mysqli_connect($this->host,$this->uname,$this->pass,$this->dbase);
    }
    function tampil(){
        $data=mysqli_query($this->a,"select * from users");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function tampil_skill($id){
        $data=mysqli_query($this->a,"select * from skills where user_id=$id");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function tambah($name){
        mysqli_query($this->a,"insert into users values('','$name')");
    }
    function skill($id,$nama){
        mysqli_query($this->a,"insert into skills values('','$nama','$id')");
    }
}
?>