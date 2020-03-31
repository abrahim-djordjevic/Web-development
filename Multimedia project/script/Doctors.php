<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>
		Doctors
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
			<a href="/script/feedback.php" class = 'button'> Feedback </a>
			<a href="/script/Doctors.php" class = "button"> Doctors </a>
			<a href="/script/Appointments.php" class = "button"> Appointments </a>
			<a href="/script/Pets.php" class = "button"> Pets </a>
			<a href="/script/index.html" class = "button"> Home </a>
		</div>
		
		<div class = "DocHeader">
			<h1 style = "text-align:center;"> Doctors </h1>
		</div>
		
		<div class = "doctors">
			<form action = "Doctors.php" method = "post">
				Doctor ID: <input type = "number" name = "DoctorID"><br><br>
				<input type = "submit" name = "search"><br><br><br>
			</form>
			<?php
			if(isset($_POST['search']))
				{
					$DoctorID = 0;
					$con = mysqli_connect("localhost", "root", "", "npc");
					$sql = "SELECT * FROM doctors";
					$result = $con -> query($sql);
					
					if ($result->num_rows > 0){
					echo "<table class = 'docTable', border = '1'>";
					echo "<tr>";
					echo "<td> Doctor ID </td>";
					echo "<td> Doctor Name </td>";
					echo "<td> Office Number </td>";
					echo "<td> Doctor Email </td>";
					while($row = $result->fetch_assoc()){
						echo "<tr>";
						echo "<td>";
						echo $row['DoctorID'];
						echo "</td>";
						echo "<td>";
						echo $row['DoctorName'];
						echo "</td>";
						echo "<td>";
						echo $row['OfficeNumber'];
						echo "</td>";
						echo "<td>";
						echo $row['DoctorEmail'];
						echo "</td>";
						echo "</tr>";
					}
					echo "</table>";
					$con -> close();
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
</body>
</html>