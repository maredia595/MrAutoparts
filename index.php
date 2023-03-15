<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <! css link -->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0"> 
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
             <div class="container-fluid">
                  <img src="../images/logo.png" alt="" class="logo">
             

                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-0">
         
                    <li class="nav-item">
                       <b><a class="nav-link active"  href="#">Welcome Admin</a></b>
                    </li>
         
                  </ul>
             </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2"> Manage Details </h3>   
        </div>

        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-5 align-items-center">
                <div class="button text-center">
                    <button><b><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></b></button>
                    <button><b><a href="" class="nav-link text-light bg-info my-1">View Products</a></b></button>
                    <button><b><a href="" class="nav-link text-light bg-info my-1">Insert Categories</a></b></button>
                    <button><b><a href="" class="nav-link text-light bg-info my-1">View Categories</a></b></button>
                    <button><b><a href="" class="nav-link text-light bg-info my-1">Insert Brand</a></b></button>
                    <button><b><a href="" class="nav-link text-light bg-info my-1">View Brand</a></b></button>
                    <button><b><a href="" class="nav-link text-light bg-info my-1">All orders</a></b></button>
                    <button><b><a href="" class="nav-link text-light bg-info my-1">All payments</a></b></button>
                    <button><b><a href="" class="nav-link text-light bg-info my-1">List users</a></b></button>
                    <button><b><a href="" class="nav-link text-light bg-info my-1">Logout</a></b></button>
                </div>
            </div>
        </div>
    </div>

     <!-- bootstrap js link -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>