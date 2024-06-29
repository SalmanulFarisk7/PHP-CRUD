<?php
include 'connect.php';
if (isset($_POST['submit'])){
    $name =$_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO crud(name,email,mobile,password)VALUES('$name','$email','$mobile','$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "data inserted successfully";
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
                    class="form-control" id="name" name="name" placeholder="Enter your name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label> <input type="email"
                    class="form-control" id="email" name="email" placeholder="Enter your Email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label> <input type="number"
                    class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label><input type="password" 
                    class="form-control" id="password" name="password" placeholder="Enter your password" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary " name="submit">Submit</button>
        </form>
    </div>

</body>
</html>