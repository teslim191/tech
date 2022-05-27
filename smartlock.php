<?php 
include "db.php";        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gtechnologyit | Smart Lock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php include "header.php";       ?>
    <div class="container mt-5">
    <h3 class="text-center pt-5">Smart Lock</h3>
    <h4 class="mt-5">We provide Smart Locks for better security & convenience.</h4>
    <h5 class="text-center mt-5">Commercial & Residential Security Solutions</h5>
        <div class="container">
            <div class="row">
                <?php

                $sql = "SELECT * FROM smartimage";
                $result = mysqli_query($con, $sql);
                // $number_of_result = mysqli_num_rows($result);
                while ($row = mysqli_fetch_array($result)) {
                    $imagename = $row["imagename"];

                    echo" 
                    <div class='col-lg-3 m-1'>
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
    
</body>
</html>

