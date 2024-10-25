<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=New record created successfully");
    }
    else{
        echo"Error: " . mysqli_error($conn);
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php crud app</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 " style="background-color:#00ff5573">
        PHP COMPLETE CRUD APP
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add new user</h3>
            <p class="text-muted">complete the form below to add a new user</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50w; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" >first name: </label>
                        <input type="text" class="form-control" name="first_name" placeholder="hector">
                    </div>
                    <div class="col">
                        <label class="form-label" >last name: </label>
                        <input type="text" class="form-control" name="last_name" placeholder="frank">
                    </div>
                     </div>
                    <div class="mb-3">
                        <label class="form-label" >email: </label>
                        <input type="email" class="form-control" name="email" placeholder="name@email.com">
                    </div>
                    <div class="form-group mb-3"><label >Gender</label>&nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male" >            
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female" >            
                    <label for="female" class="form-input-label">female</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">save</button>
                    <a href="index.php" class="btn btn-danger">cancel</a>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>