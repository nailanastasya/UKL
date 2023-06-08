<?php
    include "koneksi.php";
 
    $username = $_POST['username'];
    $pass     = $_POST['password'];
    
    $sql = "select * from pengguna where username='$username' and  pass ='$pass'";

    $rows = mysqli_query($mysqli, $sql)or die(mysqli_error());
    $rs = mysqli_fetch_array($rows) ;

    if($rs){
        $_SESSION['username'] = $username ;
        $_SESSION['role'] = $rs['role_user'];
        header("location:index.php");    
    }else{
        header("location:login.html");  
    }
?>