<?php
include "db.php";

if (isset($_POST["submit"])) {
    $app_name = $_POST["app_name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $phone = $_POST["phone_number"];
    $course = $_POST["course"];
    $amount = $_POST["amount"];

    if (empty($app_name) or empty($age) or empty($gender) or empty($address) or empty($phone) or empty($course) or empty($amount)) {
        $alert= "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>All fields are required</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>
        ";
    }
    else{
        $sql = "INSERT INTO students(app_name,age,gender,address,phone,course,amount) VALUES('$app_name','$age','$gender','$address','$phone','$course','$amount')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $alert= "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Registration successful. We will get in touch!!</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
        else{
            $alert= "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Unable register student</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
    }

}
?>

<?php include "db.php";     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>

          <?php
          include "header.php";
            if (isset($_GET["id"])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM course WHERE id = '$id'";
                $result = mysqli_query($con, $query);
                if ($result) {
                    while ($arr=mysqli_fetch_array($result)) {
                        $id = $arr["id"];
                        $name = $arr["name"];
                        $price = $arr["price"];
                        $description = $arr["description"];
                    }
                }                
            }

?>

<div class="container mt-5">
    <h1 class="text-center"><?php echo $name;?></h1>
    <p><?php echo $description; ?></p>
    
</div>
    
        <div class="container w-50">
            <h3 class="text-center">Register</h3>
            <?php echo @$alert; ?>
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <label>Applicant Name</label>
                <input type="name" name="app_name" placeholder="Applicant Name" required class="form-control mb-2">
                <label>Age</label>
                <input type="number" name="age" min="0" placeholder="age" required class="form-control mb-2">
                <label>Gender</label>
                <br>
                <input type="radio" value="male" name="gender">Male
                <input type="radio" name="gender" value="female">Female
                <br>
                <label class="mt-2">Address</label>
                <input type="text" name="address" placeholder="address" required class="form-control mb-2">
                <label>Phone Number</label>
                <input type="text" name="phone_number" placeholder="phone number" required class="form-control mb-2">
                <label>Course</label>
                <input type="text" name="course" placeholder="course" required class="form-control mb-2" value="<?php echo $name;   ?>">
                <label>Amount</label>
                <input type="text" name="amount" placeholder="amount" required class="form-control mb-2" value="<?php echo $price  ?>">
                <input type="submit" name="submit" class="btn btn-primary mt-3" value="register">
            </form>        
        </div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
</body>
</html>