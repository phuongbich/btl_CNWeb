<?php
     include("config/bp.php");   
     include("header.php");
?>
<?php 
            //1. Get the ID of Selected Admin
            $id=$_GET['id'];

            //2. Create SQL Query to Get the Details
            $sql="SELECT * FROM tbl_admin WHERE id=$id";

            //Execute the Query
            $res=mysqli_query($conn, $sql);

            //Check whether the query is executed or not
            if($res==true)
            {
                // Check whether the data is available or not
                $count = mysqli_num_rows($res);
                //Check whether we have admin data or not
                if($count==1)
                {
                    // Get the Details
                    //echo "Admin Available";
                    $row=mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $username = $row['user_name'];
                    $email = $row['email'];
                }
                else
                {
                    //Redirect to Manage Admin PAge
                    header('location:'.SITEURL.'admin/user.php');
                }
            }
        
        ?>
    <form method="post" action=""><div class="container mt-5">
        <div class="row ">
			<div class="col-md-5 mx-auto ">
			    <div id="second">
			        <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Update User</h1>
                           </div>
                        </div>
                        <form action="#" name="registration">
                           <div class="form-group ">
                                <label for="fullname" ><strong>Full name:</strong></label><br>
                                <input type="text" name="full_name" id="fullname" class="form-control" value="<?php echo $full_name; ?>" placeholder="Enter Full Name">
                           </div>
                           <div class="form-group">
                                <label for="username" ><strong>Username:</strong></label><br>
                                <input type="text" name="user_name" id="username" class="form-control" value="<?php echo $username; ?>" placeholder="Enter Username">
                           </div>
                           <div class="form-group">
                                <label for="email" ><strong>Email:</strong></label><br>
                                <input type="email" name="email" id="email" class="form-control"value="<?php echo $email; ?>" placeholder="Enter Email">
                           </div>
                           <div class="col-md-12 text-center mb-5 mt-3">
                              <button type="submit" name="btnupdateuser" class=" btn btn-block mybtn btn-primary tx-tfm">Update User</button>
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
 </form>
        
<?php 
    //Check whether the Submit Button is Clicked or not
    if(isset($_POST['btnupdateuser']))
    {
        //echo "Button CLicked";
        //Get all the values from form to update
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['user_name'];
        $email = $row['email'];
        //Create a SQL Query to Update Admin
        $sql = "UPDATE tbl_admin SET full_name = '$full_name',user_name = '$username' ,
        email = '$email' WHERE id='$id' ";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether the query executed successfully or not
        if($res==true)
        {
            //Query Executed and Admin Updated
            //$_SESSION['update'] = "<div class='dark'>Admin Updated Successfully.</div>";
            //Redirect to Manage Admin Page
            header('location:'.SITEURL.'/admin/user.php');
        }
        // else
        // {
        //     //Failed to Update Admin
        //     $_SESSION['update'] = "<div class='error'>Failed to Delete Admin.</div>";
        //     //Redirect to Manage Admin Page
        //     header('location:'.SITEURL.'/admin/user.php');
        // }
    }
?>

<?php
      include("footer.php");
?> 