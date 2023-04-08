<?php
    require("admin_connection.php");
?>

<!DOCTYPE html>
<html lang="en" class="back">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin</title>
    <link href="css/admin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="login-box">
        <h2>Admin</h2>
        <form method="POST">
            <div class="user-box">
                <label>Username</label>
                <input type="text" name="adminName">
            </div>
            <div class="user-box">
                <label>Password</label>
                <input type="password" name="adminPass">
            </div>
            <input type="submit" name="signin" value="login">
        </form>
    </div>
    <?php
        if(isset($_POST['signin'])){
            $adminName = $_POST['adminName'];
            $adminPass = $_POST['adminPass'];
            $query_sql = "SELECT * FROM admin_table WHERE admin_name='$adminName' AND admin_password='$adminPass'";
            $result = mysqli_query($connection, $query_sql);
            if($result){
                if(mysqli_num_rows($result) == 1){
                    session_start();
                    $_SESSION['adminloginID']=$_POST['adminName'];
                    header("location: adminpanel.php");
                } else {
                    echo "Incorrect";
                }
            } else {
                echo "Query error: " . mysqli_error($connection);
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>