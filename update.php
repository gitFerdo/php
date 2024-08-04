<?php
include 'connect.php';

$id = $_GET['updateId'];

$sql = "select * from `crud` where id = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id = '$id', name = '$name', email = '$email', mobile = '$mobile', password = '$password' where id = '$id'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        //echo "Updated successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>PHP CRUD</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name: </label>
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="enter your name" 
                    name="name" 
                    value=<?php echo $name ?>
                >
            </div>

            <div class="form-group">
                <label>Email: </label>
                <input t
                    ype="email" 
                    class="form-control" 
                    placeholder="enter your email" 
                    name="email"
                    value=<?php echo $email ?>    
                >
            </div>

            <div class="form-group">
                <label>Mobile: </label>
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="enter your mobile" 
                    name="mobile"
                    value=<?php echo $mobile ?>    
                >
            </div>

            <div class="form-group">
                <label>Password: </label>
                <input 
                    type="password" 
                    class="form-control" 
                    placeholder="enter your password" 
                    name="password"
                    value=<?php echo $password ?> 
                >
            </div>

            <button type="submit" name="update" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>