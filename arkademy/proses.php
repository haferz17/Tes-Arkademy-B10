<?php
    include 'database.php';
    $db=new database();
    
    $aksi=$_GET['aksi'];
    if($aksi=="tambah"){
      $db->tambah($_POST['name']);
      header('location:index.php');
    }
    elseif($aksi=="skill"){
        $db->skill($_POST['id'],$_POST['nama']);
        header('location:index.php');
    }
?>