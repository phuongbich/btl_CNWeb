<?php
    //bước 1: kết nối Server
    //Định nghĩa hằng số trong PHP
    define('SITEURL', 'http://localhost/btl');
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB_NAME', 'upraise');
    define('PORT', '3306');
    $conn = mysqli_connect(HOST,USER,PASS,DB_NAME);
    if(!$conn){
        die("Không thể kết nối: ".mysqli_connect_error());
}
?>