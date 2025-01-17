
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
      <?php
      if(isset($_GET['msg'])){
        $msg= $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
      ?>
        <a href="add_new.php" class="btn btn-dark mb-3">Add new</a>
        <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr >
          <th scope="col" >ID</th>
          <th scope="col">First name</th>
          <th scope="col">Last name </th>
          <th scope="col">email</th>
          <th scope="col">gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "db_conn.php";

        $sql="SELECT * FROM `crud`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            ?>

        <tr >
          <td ><?php echo $row['id']; ?></td>
          <td> <?php echo $row['first_name']; ?></td>
          <td> <?php echo $row['last_name']; ?></td>
          <td ><?php echo $row['email']; ?></td>
          <td ><?php echo $row['gender']; ?></td>
        
          <td>
            <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
            <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
        </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>