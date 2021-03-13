<!DOCTYPE HTML>
<html>
	<head>
		<title>Python Editorial - Python News, Articles & Projects Newsletter</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
			/* Style the form element with a border around it */
			

			/* Add some padding and a grey background color to containers */
			.container {
			  padding: 20px;
			}

			/* Style the input elements and the submit button */
			input[type=email], input[type=submit] {
			  width: 100%;
			  padding: 12px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
			}

			/* Style the submit button */
			input[type=submit] {
			  background-color: #FFD43B;
			  color: white;
			  border: none;
			}

			input[type=submit]:hover {
			  opacity: 0.8;
			}
		</style>
	</head>
	<body class="w3-content" style="max-width:100%;">
	
		<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-container w3-center" style="height:900px;background-color:">
    <div class="w3-padding-64">
      <img src="python-editorial-logo.png" style="width:60%;">
	  <div class="container">
			<h3 style="font-family: Source Sans Pro, Helvetica, Sans Serif;">A free, once–weekly email roundup of Python news, articles and projects with codes.</h3>
		  </div>
		  
		  
		  
		  <form action="#" method="POST">
			  <div class="container" style="background-color:white">
				<input style="font-family: Source Sans Pro, Helvetica, Sans Serif;" type="email" placeholder="Email address" name="email" required>
				<b><input style="font-family: Source Sans Pro, Helvetica, Sans Serif;" type="submit" name="emailsubmit" value="Join Our Newsletter"></b>
			  </div>
		  </form>
		  
		  <?php
			$con = mysqli_connect('localhost','root','2005eren07');
			mysqli_select_db($con, 'pythonnewsletter');

			$email = $_POST['email'];
			
			$s = "SELECT * FROM emails WHERE email_address = '$email'";
			$result = mysqli_query($con, $s);
			$num = mysqli_num_rows($result);

			if(isset($_POST['emailsubmit']) && $num == 0) {
				$submit = "INSERT INTO emails (email_address) VALUES ('$email')";
				mysqli_query($con, $submit);
				echo "Thanks for joining our newsletter!";
			}
		  ?>
		  
		  
		  
		  <p style="padding:10px;font-family: Source Sans Pro, Helvetica, Sans Serif;">Each week, we write about interesting projects made with Python and include their codes! Interested? Well, join our newsletter. It's completely free!</p>
    </div>
		
  </div>
  <div class="w3-half w3-container" style="height:900px;background-color:#306998;">
    <div class="w3-padding-64 w3-center">
      <h1 style="font-family: Source Sans Pro, Helvetica, Sans Serif;">Our Latest Issue</h1>
      <iframe src="/issue1.html" style="border:1px solid lightgrey;width:80%;height:500px;">
		
	  </iframe>
    </div>
  </div>
</div>

	</body>
</html>