<?php
     session_start();
     include("config/bp.php");
     if(isset($_POST['sbmLogin'])){
        $email = $_POST['email'];
        $pass  = $_POST['pass_word'];

        //bước 2: Thực hiện truy vấn
        $sql = "SELECT * FROM tbl_admin WHERE email='$email' AND pass_word='$pass'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            $_SESSION['login'] = "<div class='success'>Please login to access Admin Panel.</div>";         //tạo phiên
           
            header('location:'.SITEURL.'/admin/');
        }
        else{
            header('location:'.SITEURL.'/admin/login.php');
        }
     }
?>