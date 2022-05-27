<?php
session_start();
ob_start();
include("db.php");


if (isset($_SESSION["email"])) {
	header("Location: dashboard.php");
}else{


	if (isset($_POST['login'])) {

		$email = $_POST['email'];
		$password = $_POST['password'];


		if (empty($email) or empty($password)) {
			$result = "All fields are required fields";
		}else if (strlen($password) < 6) {
			$result = "password too short";
		}
		else{
			$query = "SELECT * FROM admin where email='$email' && password='$password'";
			$result = mysqli_query($con, $query);
			if (mysqli_num_rows($result) == 1) {
				while ($arr=mysqli_fetch_array($result)) {
					$email = $arr["email"];
					$password = $arr["password"];

					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;

					header("Location: dashboard.php");
                    
				}
			}
			else{
				echo "<script>alert('Invalid login details!!')</script>";
			}
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
}
?>
</body>
</html>