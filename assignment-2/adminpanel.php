<?php
    require('contact_data.php');
    $query_s="SELECT * FROM `contact_table`";
    $result=mysqli_query($connection, $query_s);

    session_start();
    if(!isset($_SESSION['adminloginID'])){
        header("location:admin.php");
    }
?>

<!DOCTYPE html>
<html lang="en" class="back">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard</title>
    <link href="css/admin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar" style="background-color:black;color:whitesmoke; opacity:80%;">
  <div class="container-fluid">
    <a class="navbar-brand">Welcome <?php echo $_SESSION['adminloginID']?></a>
    <form class="d-flex" method="POST">
      <button class="btn btn-outline-success" type="submit" name="logout" >Logout</button>
    </form>
  </div>
</nav>
<table class=" mt-5 table table-dark" style="opacity:90%;">
  <thead>
  <tr>
      <!-- <th scope="col ms-2">Serial</th> -->
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  
  <tbody>
    <tr class="table-active">
        <?php
        while($row=mysqli_fetch_assoc($result)){
    //   <th scope="row">1</th>
    //   <td>Mark</td>
    //   <td>Otto</td>
    //   <td>@mdo</td>
    //   <td>234</td>
    //   <td>mess</td>
      ?>
      
        <td><?php echo $row['first_name']?></td>
        <td><?php echo $row['last_name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['phone']?></td>
        <td><?php echo $row['message']?></td>

      </tr>
      <?php
      }
      ?>
    <!-- </tr> -->
  </tbody>
</table>


<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:admin.php");
    }
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>