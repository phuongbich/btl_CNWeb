<?php
     include("config/bp.php");   
     include("header.php");

?>
    <form method="post" action=""><div class="container mt-5">
        <div class="row ">
			<div class="col-md-5 mx-auto ">
			    <div id="second">
			        <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Add User</h1>
                           </div>
                        </div>
                        <form action="#" name="registration">
                           <div class="form-group ">
                                <label for="fullname" ><strong>Full name:</strong></label><br>
                                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter Full Name">
                           </div>
                           <div class="form-group">
                                <label for="username" ><strong>Username:</strong></label><br>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
                           </div>
                           <div class="form-group">
                                <label for="email" ><strong>Email:</strong></label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1"><strong>Password</strong></label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center mb-5 mt-3">
                              <button type="submit" name="btnAdduser" class=" btn btn-block mybtn btn-primary tx-tfm">Add User</button>
                           </div>
                           
                        </form>
                    </div>
                </div>
			</div>
		</div>
    </div>
    <h5>
        <button class="btn btn-outline-orange btn-warning  my-2 my-sm-0" type="submit">
            <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/user.php"><< </a>  
        </button>
    </h5>
</form>
    <?php
     if(isset($_POST['btnAdduser'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass  = $_POST['password'];
        $pass_hash =password_hash($pass, PASSWORD_DEFAULT);

        // kiểm tra: DL người dùng nhập có đnag bổ trống trường nào k
        // ktra: trc khi thêm tk p ktra username và email này có tồn tại chưa?
        // nếu chưa thì mời thêm
        // bc2: thực hiện truy vấn
        $sql = "INSERT INTO tbl_admin (full_name, user_name, email , pass_word)
                VALUE ('$fullname','$username','$email','$pass_hash')";
        if(mysqli_query($conn, $sql)){
            header('location:'.SITEURL.'/admin/user.php');
        }

     }
?>

<?php
      include("footer.php");
?> 