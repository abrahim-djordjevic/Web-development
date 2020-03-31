<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>
		Appointments
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
			<img id = "logo" src = '/script/images/Logo1.png'/> 
		</div>

		<div class = "topnav">
			<a href="/script/feedback.html" class = 'button'> Feedback </a>
			<a href="/script/Doctors.php" class = "button"> Doctors</a>
			<a href="/script/Appointments.php" class = "button"> Appointments </a>
			<a href="/script/Pets.php" class = "button"> Pets </a>
			<a href="/script/index.html" class = "button"> Home </a>
		</div>
		<div class = "PetHeader">
			<h1 style = "text-align:center;"> Appointments </h1>
		</div>
		<div class = "Apps">
			<form action = "Appointments.php" method = "post">
				Pet Name:<input type = "text" name = "PetName"><br><br>
				<input type = "submit" name = "search"><br><br><br>
			</form>
			<?php
			if(isset($_POST['search'])){
				$PetName = '-';
				$PetName = $_POST['PetName'];
				$conn = mysqli_connect("localhost", "root", "", "npc");
				$sqlApp = "SELECT pets.PetName, pets.PetID, appointments.DoctorID, appointments.NurseID, appointments.AppointmentDate, appointments.AppointmentTime
						FROM appointments INNER JOIN pets ON appointments.PetID = pets.PetID Where PetName LIKE '%{$PetName}%'";
				$results = $conn->query($sqlApp);
				if ($results->num_rows > 0){
					echo "<table class = 'petTable', border = '1'>";
					echo "<tr>";
					echo "<td> Pet </td>";
					echo "<td> PetID </td>";
					echo "<td> DoctorID </td>";
					echo "<td> NurseID </td>";
					echo "<td> Date </td>";
					echo "<td> Time </td>";
					while($row = $results->fetch_assoc()){
						echo "<tr>";
						echo "<td>";
						echo $row['PetName'];
						echo "</td>";
						echo "<td>";
						echo $row['PetID'];
						echo "</td>";
						echo "<td>";
						echo $row['DoctorID'];
						echo "</td>";
						echo "<td>";
						echo $row['NurseID'];
						echo "</td>";
						echo "<td>";
						echo $row['AppointmentDate'];
						echo "</td>";
						echo "<td>";
						echo $row['AppointmentTime'];
						echo "</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				}
				?>
		</div>
		<div class = "footer">
			<ul id = "conList1" >
				<li> Phone: 0161 434 265 </li>
				<li> Email: info@NPC.co.uk </li>
				<li> Address: 123 Newcastle Street </li>
				<li> PostCode: M2 4SQ </li>
			</ul>
		</div>
	</div>