<!DOCTYPE html>
<html>
<head>
	<title>Ayiko Andrew</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome5.15.3/all.min.css         ">
    <script>
		$("document").ready(function () {
			$("form").submit(function (event) {
				event.preventDefault();
				var name = $("name").val();
				var email = $("email").val();
				var message = $("message").val();
				var submit = $("submit").val();

				$("form-message").load("submit-form.php", {
					name : name,
					email : email,
					message : message,
					submit : submit
				});
			});
		});
    </script>

</head>
<body class="homepage">
<header class="header">
	<nav class="nav">
		<ul>
			<li><a href="#hero">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#work">Work</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
</header>

	<main>
		<section id="hero">
			<h2>Welcome to My Website</h2>
			<p>Here you can learn all about me and my work.</p>
			<a href="#work" class="cta">View My Work</a>
		</section>
		<section id="about">
			<h2>About Me</h2>
			<p>I am a computer science student at Ndejje University with a passion for artificial intelligence. In my free time, I like to experiment with machine learning algorithms and build small projects.</p>
			<a href="#contact" class="cta">Get in Touch</a>
		</section>
		<section id="work">
			<h2>My Work</h2>
			<p>Check out some of my recent projects:</p>
			<ul>
				<li>
					<h3>Project 1</h3>
					<p>Description of Project 1</p>
					<a href="#">View Project</a>
				</li>
				<li>
					<h3>Project 2</h3>
					<p>Description of Project 2</p>
					<a href="#">View Project</a>
				</li>
				<li>
					<h3>Project 3</h3>
					<p>Description of Project 3</p>
					<a href="#">View Project</a>
				</li>
			</ul>
		</section>
		<section id="contact">
			<h2>Contact Me</h2>
			<form action="submit-form.php" method="POST" id="better">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" placeholder="Full name"><br><br>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" placeholder="E-mail address"><br><br>

				<label for="message">Message:</label>
				<textarea id="message" name="message" placeholder="Your message" name="message"></textarea><br><br>

				<input type="submit" value="Send Message" id="submit" name="submit">
				<p class="form-message"></p>
			</form>
		</section>
	</main>
	<footer>
		<p>&copy; 2023 Ayiko Andrew. You can modify the code. You have my blessings.</p>
		<div class="social-media">
			<a href="https://twitter.com/IamAyikoAndrew">
				<i class="fab fa-twitter"></i>
			</a>
		</div>
	</footer>
</body>
</html>
