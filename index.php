<!doctype html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>
		Mom Birthday
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
        <link href="style.css" rel="stylesheet">
 <script>
	function validate(){
	var pass=document.getElementById("name").value;
	if(pass=="1234"){
		alert("Let's go")
		window.location.href = "main.html";
		return false;
	}
	if(pass==""){
		alert("Error");
	}
	if(pass!="1234"){
		alert("Please Check your password");
	}
};
	</script>
       

   
</head>
<body>
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<h4>Welcome to the journey of great Queen<br><br><b><u><span>"Mehabooba"</span></u></b></h4><br>
			<h6><b>To see the video please enter the password</b></h6>
			<p class="message"></p>
			<form id="admin-login-form" onsubmit="return validate()" method="POST" >
			  <div class="form-group">
			    <input type="text" class="form-control" name="name" id="name" required>
			  </div>
			  <div class="button">
			  <button type="submit" id="submit" class="btn login-btn" name="submit">See the video</button>
			</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>




