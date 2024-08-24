
<?php
require"./include/db.php";

// if(!$conn){
//   echo "Error";
//   die(mysqli_connect_error());
// }else{
//   echo "connected";
// }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>connect mysqli</title>
  </head>
  <body>
    
    <?php include'./partials/Navbar.php' ?>

      <div class="container mt-5">
        <div class="row">
          <div class=" col-md-6 offset-md-3">
          <div class="card">
            <div class="card-body">

              <form action="./include/apply-register.php" method="POST" >

              <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name...">
              </div>

              <div class="mb-3">
                  <label for="roll" class="form-label">Roll</label>
                  <input type="number" class="form-control" name="roll" placeholder="Roll...">
              </div>

              <div class="mb-3">
                  <label for="roll" class="form-label">Department</label>
                  <select class="form-control" name="department">
                      <option value="">Choose one</option>
                      <option value="eee">EEE</option>
                      <option value="cse">CSE</option>
                  </select>
              </div>

              <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="tel" class="form-control" name="phone" placeholder="Phone...">
              </div>

              <div class="mb-3">
                  <label for="gender" class="form-label">Gender</label> <br/>

                  <input type="radio" name="gender" value="male"> Male
                  <input type="radio" name="gender" value="female"> Female
              </div>

              <div>
                  <button type="submit" name="register-submit" class="btn btn-primary btn-block w-100">Sign in</button>
              </div>

              </form>

            </div>
          </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>