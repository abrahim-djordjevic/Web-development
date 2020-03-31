<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>
		Pets
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
			<a href="feedback.html" class = "button"> Feedback </a>
			<a href="http://google.com" class = "button"> Contact Us</a>
			<a href="http://google.com" class = "button"> Appointments </a>
			<a href="http://google.com" class = "button"> Pets </a>
			<a href="index.html" class = "button"> Home </a>
		</div>
		<div class = "pets">
				<?php
				$con = mysqli_connect("localhost", "root", "", "npc");
				$sql = "SELECT * FROM pets";
				$result = $con->query($sql);
				if ($result->num_rows > 0){
					echo "<table border = '1'>";
					echo "<tr>";
					echo "<td> PetID </td>";
					echo "<td> ClientID </td>";
					echo "<td> TypeID </td>";
					echo "<td> PetName </td>";
					echo "<td> PetAge </td>";
					echo "<td> PetGender </td>";
					echo "<td> PetWeight </td>";
					echo "<td> PetColour </td>";
					echo "</tr>";
					while($row = $result->fetch_assoc()){
						echo "<tr>";
						echo "<td>";
						echo $row['PetID'];
						echo "</td>";
						echo "<td>";
						echo $row['ClientID'];
						echo "</td>";
						echo "<td>";
						echo $row['TypeID'];
						echo "</td>";
						echo "<td>";
						echo $row['PetName'];
						echo "</td>";
						echo "<td>";
						echo $row['PetAge'];
						echo "</td>";
						echo "<td>";
						echo $row['PetGender'];
						echo "</td>";
						echo "<td>";
						echo $row['PetWeight'];
						echo "</td>";
						echo "<td>";
						echo $row['PetColour'];
						echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
				}
			?>
		</div>
		
</body>
</html>