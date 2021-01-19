<!doctype html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>
		Mom Birthday
	</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	 <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

   
</head>
<body>
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<h6><b>Thank you for watching the video</b></h6>
			<p class="message"></p>
			<form id="admin-login-form" method="POST" action="#">
			  <div class="form-group">
			  	<small><mark>Today is my mom"s birthday <br>give your best wishes</mark></small><br><br>
			  	<div class="form-group">
			    <label for="name">Enter your name:</label>
			    <input type="text" class="form-control" name="name" id="name" required>
			  </div>
			    <label for="name">Your Best Wishes:</label>
			   <textarea id="w3review" name="feed" rows="3" cols="40">
								</textarea>
			  </div>
			  <div class="button">
			  <button type="submit" id="submit" class="btn login-btn" name="submit">Send</button>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>

<?php
$con=new mysqli("localhost","root","","wish");

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$feed=$_POST['feed'];

	$sql="INSERT INTO `wish`(`name`,`wishes`) VALUES ('$name','$feed')";
	$res=mysqli_query($con,$sql);
	?>
	<script type="text/javascript">alert("Thank you for your response");window.location.href="index.php "</script><?php
}

?>


