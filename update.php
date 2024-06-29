<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM crud WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if (isset($_POST['submit'])){
    $name =$_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE crud SET id=$id,name='$name',email='$email',
    mobile='$mobile',password='$password' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo " Updated successfully";
        header('location:display.php');
    }else {
        echo "Error : ".$conn->error;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud Operation!</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
        <div class="mb-3">
                <label for="name" class="form-label">Name</label> <input type="text" 
                    class="form-control" id="name" name="name" placeholder="Enter your name" autocomplete="off" value=<?php echo $name;?> >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label> <input type="email"
                    class="form-control" id="email" name="email" placeholder="Enter your Email" autocomplete="off"  value=<?php echo $email;?>>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label> <input type="number"
                    class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" autocomplete="off" value=<?php echo $mobile;?>>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label><input type="password" 
                    class="form-control" id="password" name="password" placeholder="Enter your password" autocomplete="off" value=<?php echo $password;?>>
            </div>
            <button type="submit" class="btn btn-primary " name="submit">Update</button>
        </form>
    </div>

</body>
</html>