<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>
		Feedback
	</title>
	<style>
		<?php
			include 'style.css';
		?>
	</style>
</head>
<body>
		<div id = "container">
		<div id = "header">
			<a href="/script/index.html"> <img id = "logo" src = '/script/images/Logo1.png' alt = "Logo"/> </a>
		</div>

		<div class = "topnav">
			<a href="/script/Feedback.php" class = 'button'> Feedback </a>
			<a href="/script/Doctors.php" class = "button"> Doctors </a>
			<a href="/script/Appointments.php" class = "button"> Appointments </a>
			<a href="/script/Pets.php" class = "button"> Pets </a>
			<a href="/script/index.html" class = "button"> Home </a>
		</div>
		
		<div class = "FeedbackDetails">
			<form action = "feedback.php" method = "post">
				First name:<br>
				<input type = "text" name = "firstname"><br><br>
				Last name:<br>
				<input type = "text" name = "lastname"><br><br>
				Email:<br>
				<input type = "text" name = "email"><br><br>
				Feedback:<br>
				<textarea type = "text" name = "details" cols = = "10"></textarea>
				<br>
				<br>
				<input type = "submit">
		
			</form>
			<?php
				$conn = mysql_connect("localhost", "root", "", "npc"); //establish connection
				if(isset($_POST['search'])){
					$firstName = $_POST['firstname'];
					$lastName = $_POST['lastname'];
					$email = $_POST['email'];
					$details = $_POST['details'];
					//Insert Query
					$sql = mysql_query("insert into feedback(firstname, lastname, email, details) values ('$firstName', '$lastName', '$email', '$details)");
				}
			?>
		</div>
		<div class = "footer">
			<ul id = "conList1">
				<li> Phone: 0161 434 265 </li>
				<li> Email: info@NPC.co.uk </li>
				<li> Address: 123 Newcastle Street </li>
				<li> PostCode: M2 4SQ </li>
			</ul>
		</div>
	</div>
</body>
</html>