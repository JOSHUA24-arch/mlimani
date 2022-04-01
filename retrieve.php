
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin page</title>
  </head>

  <body>
      <form action="" method="POST">
          <table class="table table-striped table-bordered">
              <tr class="table-primary">
                  <th>FIRST NAME</th>
                  <th>LAST NAME</th>
                  <th>PHONE NUMBER</th>
                  <th>ADDRESS</th>
                  <th>GENDER</th>
              </tr>

                 <div class="col-12 text-center p-3 ">
               <input type="submit" name="see" value="member" class="btn btn-primary"></input>
                 </div>

                 <?php
                 
                    $connect = mysqli_connect("localhost","root","","fred");

                    if(isset($_POST['see'])){
                        $ret1 = "SELECT * FROM User";
                        $query = mysqli_query($connect, $ret1);

                        $row = mysqli_fetch_array($query);

                        while($row){
                ?>
                        <tr>
                            <td><?php echo $row['f_name']?></td>
                            <td><?php echo $row['l_name']?></td>
                            <td><?php echo $row['p_number']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><?php echo $row['gender']?></td>
                        </tr>

                        <?php
                        }
                    }

                        ?>

                 

          </table>
      </form>
  </body>

   
</html>

