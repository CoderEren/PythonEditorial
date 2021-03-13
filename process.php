<?php
			session_start();

			$con = mysqli_connect('localhost','root','2005eren07');

			mysqli_select_db($con, 'pythonnewsletter');

			$loginemail = $_POST['email'];

			$s = "SELECT * FROM emails WHERE email_address = '$loginemail'";
			$result = mysqli_query($con, $s);
			$num = mysqli_num_rows($result);

				if($num == 1) {
					$_SESSION['email'] = $loginemail;
					header('location:member.php');
				} else {
					header('location:login.php');
				}
?>