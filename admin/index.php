<?php
      session_start();   //Báo hiệu trnag này đang có dịch vụ vệ sĩ
      include("config/bp.php");
      if(!isset($_SESSION['login'])){
           header('location:'.SITEURL.'/admin/login.php');
      }
      include("header.php");
?>
     <div class="bg-light" style=" padding:4% 0% 4% 12% ;">
          <form class="form-inline " style=" margin-left:0% ">
                  <h5><button class="btn btn-outline-orange btn-secondary mx-1 my-2 my-sm-0 " type="submit">
                      <a style="text-decoration: none"  class="text-white" href="http://localhost/btl/admin/">Home</a>
                  </button></h5>
                  <button class="btn btn-outline-orange btn-warning  mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/user.php">User</a>  
                  </button>
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
     <div class="container mb-4">
          <div class="row text-center mt-5 ">
               <div class="col-md-6  py-5 " style="border-radius:10px; background-color: #fc2516b7;;">
                    <h2>
                         <?php
                             $sql1 = "SELECT *FROM tbl_admin";
                             $result = mysqli_query($conn, $sql1);
                             $count_user = mysqli_num_rows($result);
                             echo $count_user;
                         ?>
                    </h2>
                    <a href="http://localhost/btl/admin/user.php" style="text-decoration: none" class="text-dark">User</a>
               </div>
               <div class="col-md-6 py-5" style="border-radius:10px; background-color:  #85dbebef;">
                    <h2>
                         <?php
                             $sql2 = "SELECT *FROM tbl_entry";
                             $result = mysqli_query($conn, $sql2);
                             $count_entry = mysqli_num_rows($result);
                             echo $count_entry;
                         ?>
                    </h2>
                    <a href="http://localhost/btl/admin/customer.php" style="text-decoration: none" class="text-dark">Customer</a>
               </div>
          </div>
          <div class="row text-center ">
               <div class="col-md-6 py-5" style="border-radius:10px; background-color: #01ffb386;">
                    <h2>
                         <?php
                             $sql3 = "SELECT *FROM tbl_news";
                             $result = mysqli_query($conn, $sql3);
                             $count_news = mysqli_num_rows($result);
                             echo $count_news;
                         ?>
                    </h2>
                    <a href="http://localhost/btl/admin/news.php" style="text-decoration: none" class="text-dark">News</a>
               </div>
               <div class="col-md-6  py-5" style="border-radius:10px; background-color: #fffb08ab;">
                    <h2>
                         <?php
                             $sql4 = "SELECT *FROM tbl_static_post";
                             $result = mysqli_query($conn, $sql4);
                             $count_static_post = mysqli_num_rows($result);
                             echo $count_static_post;
                         ?>
                    </h2>
                    <a href="http://localhost/btl/admin/static_post.php" style="text-decoration: none" class="text-dark">Static Post</a>
               </div>
          </div>
     </div>
<?php
      include("footer.php")
?>
