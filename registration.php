<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>registration form</title>

<style>
.container{
  background-color: aqua;
  
}
.col-md-4{
  
  padding-left: 20PX;
}

</style>




  </head>
  <body>


    <form class="container p-5" action="conn.php">
      <div class="col-md-4">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" name="firstname" required>
      </div>
      <div class="col-md-4">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="lastname" required>
      </div>
      
      <div class="col-md-4">
        <label for="inputAddress2" class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="num" placeholder="0677341431" required>
      </div>
      <div class="col-md-4">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" required>
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">Gender</label>
        <select name="gender" class="form-select">
          <option selected>Choose...</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="others">Others</option>
        </select>
      </div>
      
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            remember me
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
