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
                  <button class="btn btn-outline-orange btn-warning mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/user.php">User</a>  
                  </button>
                  <h5><button class="btn btn-outline-orange btn-secondary  mx-1 my-2 my-sm-0" type="submit">
                       <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/customer.php">Customer</a>  
                  </button></h5>
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
      <h3 class="text-center mt-3"> Customer Management</h3>
      <div class="container-fluid">
        <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
              <button type="button" class="btn btn-warning mb-3">
                  <a style="text-decoration: none" class="text-white" href="http://localhost/btl/admin/add-user.php">Add New Customer</a> 
              </button>
          </div>
        </div>
      <table class="table table-striped mb-5">
        <thead>
            <tr class="text-white bg-dark">
              <th scope="col">#</th>
              <th scope="col">Full Name</th>
              <th scope="col">Sex</th>
              <th scope="col">Birthday</th>
              <th scope="col">Telephone</th>
              <th scope="col">Address</th>
              <th scope="col">School name</th>
              <th scope="col">Education level</th>
              <th scope="col">Japanese level</th>
              <th scope="col">Time come</th>
              <th scope="col">Desired job</th>
              <th scope="col">Residence card</th>
              <th scope="col">Time stay</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>
  </div>
      
<?php
      include("footer.php")
?>    


   
    
        
