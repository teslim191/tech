<?php 
include "db.php";        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Tracking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php include "header.php";       ?>
    <div class="container mt-5">
    <h3 class="text-center pt-5">Car Tracking</h3>
    <h3 class="mt-5">How Secure is your Car?</h3>
    <p>We share our expertise in helping you safeguard your mobile assets to the maximum level through our innovative solutions.</p>
    <h4>We offer the following services</h4>
        <ul>
            <li>Vehicle trucking.</li>
            <li>fleet management.</li>
            <li>Real time Tracking.</li>
        </ul>
        <h4 class="text-center">Below are some of our recent jobs</h4>
        <div class="container">
            <div class="row">
                <?php

                $sql = "SELECT * FROM cartracking";
                $result = mysqli_query($con, $sql);
                // $number_of_result = mysqli_num_rows($result);
                while ($row = mysqli_fetch_array($result)) {
                    $imagename = $row["imagename"];

                    echo" 
                    <div class='col-lg-3 col-md-4 col-sm-6 m-1'>
                        <div class='card'>
                        <img src='images/$imagename' alt='' class='image-responsive'>  
                        </div>
                    </div>            
                    ";
                }


        ?>

                
            </div>
            
        </div>        
        </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>

