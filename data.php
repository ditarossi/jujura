<?php
require_once("dbconfig.php");
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = mysql_query("insert into `postdata` set `email` = '$email', `password`='$password'") or die (mysql_error());
    if($sql){
        echo "berhasil ditambahkan!";
    } else {
        echo "gagal";
    }
}
?>
