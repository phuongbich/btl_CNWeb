<?php
     include("config/bp.php");   
     include("header.php");
?>
<?php 
     if(isset($_GET['id']))
     {
         $id = $_GET['id'];
     }       
        
?>
    <form method="post" action=""><div class="container mt-5">
        <div class="row ">
			<div class="col-md-5 mx-auto ">
			    <div id="second">
			        <div class="myform form ">
                        
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Change Password</h1>
                           </div>
                        </div>
                        <form action="#" name="registration">
                           <div class="form-group ">
                                <label for="current_password" ><strong>Current Password:</strong></label><br>
                                <input type="password" name="current_password" id="current_password" class="form-control"  placeholder="Old Password">
                           </div>
                           <div class="form-group">
                                <label for="new_password" ><strong>New Password:</strong></label><br>
                                <input type="password" name="new_password" id="new_password" class="form-control"placeholder="New Password">
                           </div>
                           <div class="form-group">
                                <label for="confirm_password" ><strong>Confirm Password:</strong></label><br>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control"placeholder="Confirm Password">
                           </div>
                           <div class="col-md-12 text-center mb-5 mt-3">
                              <button type="submit" name="btnchangePass" class=" btn btn-block mybtn btn-primary tx-tfm">Change Password</button>
                           </div>

                           <div class="col-md-12 text-center mb-5 mt-3">
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
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
<?php
    //CHeck whether the Submit Button is Clicked on Not
    if(isset($_POST['btnchangePass']))
    {
        //echo "CLicked";

        //1. Get the DAta from Form
        $id=$_POST['id'];
        $current_password = md5($_POST['current_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);

        echo 'cos ddeens ddaay';
        //2. Check whether the user with current ID and Current Password Exists or Not
        $sql = "SELECT * FROM tbl_admin WHERE id=$id AND pass_word='$current_password'";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            //CHeck whether data is available or not
            $count=mysqli_num_rows($res);

            if($count==1)
            {
                //User Exists and Password Can be CHanged
                //echo "User FOund";

                //Check whether the new password and confirm match or not
                if($new_password==$confirm_password)
                {
                    //Update the Password
                    $sql2 = "UPDATE tbl_admin SET 
                        pass_word='$new_password' 
                        WHERE id=$id
                    ";

                    //Execute the Query
                    $res2 = mysqli_query($conn, $sql2);

                    //CHeck whether the query exeuted or not
                    if($res2==true)
                    {
                        //Display Succes Message
                        //REdirect to Manage Admin Page with Success Message
                        $_SESSION['change-pwd'] = "<div class='success'>Password Changed Successfully. </div>";
                        //Redirect the User
                        header('location:'.SITEURL.'/admin/user.php');
                    }
                    else
                    {
                        //Display Error Message
                        //REdirect to Manage Admin Page with Error Message
                        $_SESSION['change-pwd'] = "<div class='error'>Failed to Change Password. </div>";
                        //Redirect the User
                        header('location:'.SITEURL.'/admin/user.php');
                    }
                }
                else
                {
                    //REdirect to Manage Admin Page with Error Message
                    $_SESSION['pwd-not-match'] = "<div class='error'>Password Did not Patch. </div>";
                    //Redirect the User
                    header('location:'.SITEURL.'/admin/user.php');

                }
            }
            else
            {
                //User Does not Exist Set Message and REdirect
                $_SESSION['user-not-found'] = "<div class='error'>User Not Found. </div>";
                //Redirect the User
                header('location:'.SITEURL.'/admin/user.php');
            }
        }

        //3. CHeck Whether the New Password and Confirm Password Match or not

        //4. Change PAssword if all above is true
    }
    
?>
</form>
 

<?php
      include("footer.php");
?> 