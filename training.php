<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Training</title>
</head>
<body>
  <?php include "header.php"; ?>
    <div class="container">
        <h3 class="mt-5 text-center">Training</h3>
        <p class="my-5">We offer the following ICT courses</p>
        <div class="container">
            <div class="row">
                <?php

                $sql = "SELECT * FROM course";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["id"];
                    $name = $row["name"];
                    $price = $row["price"];
                    $description = $row["description"];
                    $image = $row["image"];

                    echo "
                    <div class='col-lg-3'>
                        <div class='card m-1 p-1'>
                            <img src='images/$image' alt=''>
                            <h6 class='p-2 text-center'>$name</h6>
                            <h4 class='p-2'>$price</h4>
                            <p class=''>"; echo substr($description,0,100).'...'; echo "</p>
                            <a class='btn btn-info' href='course.php?id=$id'>Learn More</a>
                        </div>
                    </div>

                    ";
                }


?>
            </div>
            <!-- <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="" method="POST">
        	<label>Email</label>
        	<input type="email" name="email" placeholder="Email" required class="form-control mb-3">
        	<label>Password</label>
        	<input type="password" name="password" placeholder="Password" required class="form-control">
        	<input type="submit" name="login" class="btn btn-primary mt-3">
        <a href="resetpassword.php" style="float: right;"  class="mt-3">
  forgot password?
</a>
        </form>
      </div>
    </div>
  </div>
</div> -->
        </div>

    </div>









<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>