<?php
	include 'config.php';
	error_reporting (0);           // if any error is not arise

	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];

		$sql = "INSERT INTO comments(name, email, comment)
				VALUES('$name','$email','$comment')";
		$result = mysqli_query($conn,$sql);

		if ($result){
			echo "<script>alert('Comment Added.')</script>";
		}
		else{
			echo "<script>alert('Something Wrong.')</script>";
		}
	}
?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content = "width= device-width, initial-scale = 1.0">
		<title>Learn Academy</title>
		<link rel="icon" href="Youtube Profile.png">
		<link rel="stylesheet" type="text/css" href="MainStyle.css?v=<?php echo time(); ?>">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	</head>
	<body>

		<div class="scrollup">
			<i class="fa fa-arrow-up"></i>
		</div>


		<nav class="navbar">
			<div class="head">
				<div class="logo"><a>Learn<span>Academy</span></a></div>
				<div class="options">
					<a href="#home">Home</a>
					<a href="#lessons">Lessons</a>
					<a href="#contact">Contact</a>
					<a href="login.php">Register</a>
					<a href="login.php">Log in</a>
				</div>
				<div class="menu-btn">
					<i class="fas fa-bars"></i>
				</div>
			</div>

		</nav>
		
		<section class="home-section" id="home">
			<div class="head">
				<div class="home-content">
					<div class="text1">A warm welcome for you.</div>
					<div class="text2">This is a learning Hotspot.</div>
					<div class="text3">Here, you can learn <span class="typing"></span></div>
				</div>
			</div>
			
		</section>

		<section class="about">
			<div class="head">
				<h3 class="title">Why This Website</h3>
				<div class="about-content">
					<div class="clmn-left">
						<img src="book.png" alt="">
					</div>
					<div class="clmn-right">
						<p>This site is supposed to help the school going students of Bangladesh. In this developing
						country, we cen see that, in internet or web sector, there is much more changes occured.
						A few years ago, where a simple feature phone was not available, there are almost every 
						students are now accuinted with smartphone. Because of Covid-19 pandemic, this rate is
						top notch now. since every student is using smartphone and internet, so it is easy to reach
						them by smart way. For this purpose, this website was born.</p>
					</div>
				</div>
			</div>
		</section>

		<section class = "lessons" id = "lessons">
			<div class="head">
				
					<div class="title">
					<h2> Choose your Subject </h2>
						<div class="options">
							<a href="Maths.php">Maths </a>
							<a href="English Grammer.php">English Grammer</a>
							<a href="Bangla Grammer.php">Bangla Grammer</a>
							<a href="Programming.php">Programming</a>
						</div>
					</div>
				
			</div>
        </section>


		<!-- Contact section below-->
		<section class="contact" id ="contact">
			<div class="head">
				<h2 class="title">Contact Us</h2>
				<div class="contact-content">
					<div class="clmn-left">
						<div class="txt">We are here to assist you.</div>
						<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Molestiae explicabo inventore quaerat harum omnis aut, 
							vel temporibus ipsum fugit eum placeat quasi aspernatur 
							eius odio! Consectetur, 
							tempora provident? Consequuntur, esse.</p>
						<div class="icons">
							<div class="row">
								<i class="fas fa-user"></i>
								<div class="info">
									<div class="header">Name</div>
									<div class="sub-title">LearnAcademy</div>
								</div>
							</div>
							<div class="row">
							<i class="fas fa-map-marker-alt"></i>
								<div class="info">
									<div class="header">Address</div>
									<div class="sub-title">Uttara, Dhaka</div>
								</div>
							</div>
							<div class="row">
							<i class="fas fa-envelope"></i>
								<div class="info">
									<div class="header">Email</div>
									<div class="sub-title">LearnAcademy@gmail.com</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clmn-right">
						<div class="txt"><b>Leave your message</b></div>
						<form action="index.php" method ="post">
							<div class="field" style= "padding:10px">
								<div class="field-name"  style= "padding:10px">
									<input type="text" placeholder= "name" name="name"  required>
								</div>
								<div class="field-email"  style= "padding:10px">
									<input type="text" placeholder= "email" name="email"  required>
								</div>
								<div class="field-subject"  style= "padding:10px">
									<input type="text" placeholder= "Subject">
								</div>
								<div class="field-comment"  style= "padding:10px">
									<textarea cols="30" rows="10" placeholder="Your comment" name="comment" required></textarea>
								</div>
								<div class="button" style= "padding:10px">
									<button name = "submit" type="submit"> Send </button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="comments">
			<center>
				<h1>Public Comments</h1>
						<div class="pre-comments">
							<?php
								$sql = "SELECT * FROM comments";
								$result = mysqli_query($conn,$sql);

								if(mysqli_num_rows($result)>0){
									while($row = mysqli_fetch_assoc($result)){
							?>

							<div class="single-item">
								<h5> <?php echo $row['Name']; ?> </h5>
								<a href = "mailto<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>  
																     
								<p><?php echo $row['comment']; ?></p>
							</div>
									
							<?php		
									}
								}
							?>
						</div>
			</center>
		</section>





		<!-- footer section below -->
		<footer>
			<br>
			
			<h3>At a glance</h3>
			<p>We are intend to make helpful contents to help the school going bangladshi students.
				Our site will help sudents to clear their ideas on textbooks.
			</p>
			<br>
			<hr>
			<br>
			<span class="far fa-copyright"> <a>LearnAcademy</a> | reserves all rights. </span>
		</footer>

	
		<script src="JavaScript.js"></script>
	</body>
</html>