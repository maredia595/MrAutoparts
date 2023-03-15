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
     <h2 class="text-center py-3"> New User Registration </h2>
     <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
<form action="" method="post" enctype="multipart/form-data">
      <!-- username field -->
      <div class="form-outline mb-4">
         <label for="user_username" class="form-label">Username </label>
        <input type="text" id="user_username" class="form-control"
        placeholder="Enter your username" autocomplete="off"
        required="required" name="user_username"/>
      </div>
      <!-- email field -->
      <div class="form-outline mb-4">
         <label for="user_email" class="form-label">Email </label>
        <input type="email" id="user_email" class="form-control"
        placeholder="Enter your email" autocomplete="off"
        required="required" name="user_email"/>
      </div>
      <!-- password field -->
      <div class="form-outline mb-4">
         <label for="user_password" class="form-label">Create Password </label>
        <input type="password" id="user_password" class="form-control"
        placeholder="Enter your password" autocomplete="off"
        required="required" name="user_password"/>
      </div>
      <!-- confirm password field -->
      <div class="form-outline mb-4">
         <label for="conf_user_password" class="form-label">Confirm Password </label>
        <input type="password" id="conf_user_password" class="form-control"
        placeholder="Enter your password" autocomplete="off"
        required="required" name="conf_user_password"/>
      </div>
      <!-- address field -->
      <div class="form-outline mb-4">
         <label for="user_address" class="form-label">Address </label>
        <input type="address" id="user_address" class="form-control"
        placeholder="Enter your address" autocomplete="off"
        required="required" name="user_address"/>
      </div>
      <!-- contact field -->
      <div class="form-outline mb-4">
         <label for="user_contact" class="form-label">Contact </label>
        <input type="contact" id="user_contact" class="form-control"
        placeholder="Enter your mobile number" autocomplete="off"
        required="required" name="user_contact"/>
      </div>
      <div class="pt-2">
        <input type="submit" value="Join for free" class="bg-info py-2 px-3 border-0 fw-bold" name="user_register">
        <p class="small fw-bold mt-2 pt-1">Already have an account ? <a href="user_login.php" class="text-danger"> Login </a></p>
      </div>
</form>
        </div>
     </div>
</div>
</body>
</html>