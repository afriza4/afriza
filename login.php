<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Document</title>
	<style>
		body{
			/* background-image: url(img/ko.jpg);
		background-size: cover; */
		}
		.login{
		
			width: 40%;
			height: 300px;
			margin: 30px auto;
			border: 2px solid black;
			text-align: center;
			padding: 50px;
			box-shadow: 0 0 2px 2px orange;
		}.logins{
			margin-top: 50px;
		}
		.login input,.login button{
			margin-bottom: 20px;
			width: 60%;
			height: 30px;
			border-radius: 5px;
			border: 1px solid black;
		}
		.login button{
			margin: auto;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 20px;
			width: 60%;
			padding: 20px;
			background-color: cornflowerblue;
			border-radius: 10px;
			font-size: 18px;
			text-align: center;
		}.login h2{
			font-size: 34px;
			margin-bottom: 10px;
		}span{
			color: blueviolet;
		}h3{
			margin-top: -15px;
		}
	</style>
</head>
<body>

<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">PENJADWALAN LAB UPT KOMPUTER</a></h1>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li ><a href="Schedule.html">SCHEDULE</a></li>
				<li><a href="contact.html">CONTACT</a></li>
				<li class="active"><a href="login.php">LOGIN</a></li>
				<li><a href="about.html">ABOUT</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Login</p>
		</div>
	</section>


	<?php 
	if(isset($_POST["submit"])){
		//seleksi
		if($_POST["nama"]=="admin" && $_POST["password"]=="123"){
			//loncat
			header("Location:tambah.php");
			exit;
		}else{
			$error=true;
		}
	}
	?>
	<div class="login">
		<div class="logins">
			<?php if(isset($error)) :?>
				<h3>Password Salah!!</h3>
				<?php endif;?>
		<h2>Login</h2>
		<form action="" method="post">
			<!-- <label for="email">Email</label> -->
			<input type="text" name="nama" id="text" placeholder="Name" autocomplete="off" required><br>
			<!-- <label for="pw">Password</label> -->
			<input type="password" name="password" id="pw" placeholder="Password" autocomplete="off" required><br>
			<button type="submit" name="submit">Login</button><br>
		
		</form>
	</div>
</div>
</body>
</html>