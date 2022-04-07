<?php
$connection = mysqli_connect('localhost', 'root', '', 'church');

$query = "SELECT * FROM user";
$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<body>

  <table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>NUMBER</th>
        <th>ADDRESS</th>
        <th>GENDER</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>
    </thead>

    <tbody>

      <?php
      if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

          ?>

      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['f_name']; ?></td>
        <td><?php echo $row['l_name']; ?></td>
        <td><?php echo $row['p_number']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['gender']; ?></td>

        <td>
          <button type="submit" class="btn btn-success">EDIT</button>
        </td>
        <td>
          <button type="submit" class="btn btn-danger">DELETE</button>
        </td>



      </tr>

      <?php
        }
      }

      else{
        echo "No record found";
      }
      ?>

      
    </tbody>



  </table>
</body>

</html>