<?php
      session_start();
      include("config/bp.php");
      if(!isset($_SESSION['login'])){
            header('location:'.SITEURL.'/admin/login.php');
      }
      include("header.php");
      
?>
       <div class="bg-light" style=" padding:4% 0% 4% 13% ; ">
            <form class="form-inline ">
                  <button class="btn btn-outline-orange btn-warning mx-1 my-2 my-sm-0 " type="submit">
                      <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/">Home</a>
                  </button>
                  <h5><button class="btn btn-outline-orange btn-secondary mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/user.php">User</a>  
                  </button></h5>
                  <button class="btn btn-outline-orange btn-warning  mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/customer.php">Customer</a>  
                  </button>
                  <button class="btn btn-outline-orange btn-warning  mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/news.php">News</a>  
                  </button>
                  <button class="btn btn-outline-orange btn-warning  mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/static_post.php">Static Post</a>  
                  </button>
                  <button class="btn btn-outline-orange btn-warning  mx-1 mr-3 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/login.php">LogOut</a>  
                  </button>
                <input class="form-control mx-5 mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
      </div>
      <h3 class="text-center mt-3"> User Management</h3></div>  
      <div class="container">
        <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
              <button type="button" class="btn btn-warning mb-3">
                  <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/add-user.php">Add New User</a> 
              </button>
          </div>
        </div>
        <?php  
            if(isset($_SESSION['update']))
                {
                   echo $_SESSION['update'];
                   unset($_SESSION['update']);
                }
                if(isset($_SESSION['user-not-found']))
                {
                    echo $_SESSION['user-not-found'];
                    unset($_SESSION['user-not-found']);
                }

                if(isset($_SESSION['pwd-not-match']))
                {
                    echo $_SESSION['pwd-not-match'];
                    unset($_SESSION['pwd-not-match']);
                }

                if(isset($_SESSION['change-pwd']))
                {
                    echo $_SESSION['change-pwd'];
                    unset($_SESSION['change-pwd']);
                }

        ?>
      <table class="table table-striped mb-5">
        <thead>
            <tr class="text-white bg-dark">
              <th scope="col">#</th>
              <th scope="col">Full Name</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Change Password</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
            // Lặp lại dữ liệu và hiển thị ra bảng
            //Bước 2: Định nghĩa và thực hiện truy vấn
            $sql= "SELECT * FROM tbl_admin";
            $result = mysqli_query($conn, $sql);
            //Bước 3: Xử lý dữ liệu trả về
            if(mysqli_num_rows($result) > 0){  
              $i=1; 
              while($row = mysqli_fetch_assoc($result)){
          ?>
                <tr>
                     <th scope="row"><?php echo $i; ?></th>
                     <td><?php echo $row['full_name']; ?></td>
                     <td><?php echo $row['user_name']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                     <td><a href="change-password.php?id=<?php echo $row['id']; ?> "><i class="bi bi-pencil-square mx-5"></i></a> </td>
                     <td><a href="update-user.php?id=<?php echo $row['id']; ?>"><i class="bi bi-capslock-fill mx-3"></i></a></td>
                     <td><a href="delete-user.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash mx-3"></i></a></td>
                </tr>
          <?php
              $i++;
              }
            }
          ?> 
            
          </tbody>
      </table>
    </div>
<?php
      include("footer.php");
?> 