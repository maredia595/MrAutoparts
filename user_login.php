<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
</head>
<body>
<div class="container-fluid my-4">
    <div class="navbar-header bg-info d-flex align-items-center justify-content-center">
    <img src="../images/logo.png" alt="" srcset="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
     <h2 class="text-center py-5 fw-bold"> Login </h2>
     <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
<form action="" method="post" enctype="multipart/form-data">
      <!-- username field -->
      <div class="form-outline mb-4">
         <label for="user_username" class="form-label">Username</label>
        <input type="text" id="user_username" class="form-control"
        placeholder="Enter your username" autocomplete="off"
        required="required" name="user_username"/>
      </div>
      
      <!-- password field -->
      <div class="form-outline mb-4">
         <label for="user_password" class="form-label">Password </label>
        <input type="password" id="user_password" class="form-control"
        placeholder="Enter your password" autocomplete="off"
        required="required" name="user_password"/>
      </div>
      
      <div class="pt-2">
        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0 fw-bold" name="user_login">
        <p class="small fw-bold mt-2 pt-1">Not a member ? <a href="user_registration.php" class="text-danger"> Join here </a></p>
      </div>
</form>
        </div>
     </div>

</div>
</body>
</html>