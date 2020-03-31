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
			<a href="/script/index.html"> <img id = "logo" src = '/script/images/Logo1.png' alt = "Logo"/> </a>
		</div>

		<div class = "topnav">
			<a href="/script/feedback.php" class = 'button'> Feedback </a>
			<a href="/script/Doctors.php" class = "button"> Doctors </a>
			<a href="/script/Appointments.php" class = "button"> Appointments </a>
			<a href="/script/Pets.php" class = "button"> Pets </a>
			<a href="/script/index.html" class = "button"> Home </a>
		</div>
		<div class = "PetHeader">
			<h1 style = "text-align:center;"> Pets </h1>
		</div>
		<div class = "pets">
				<form action = "Pets.php" method = "post">
					Pet Name:<input type = "text" name = "PetName"><br><br>
					Pets Age:   <input type = "number" name = "PetAge"><br><br>
					Pets Sex: <input type = "text" name = "PetGender"><br><br> 
					<input type = "submit" name = "search"><br><br><br>
				</form>
				<?php
				if(isset($_POST['search']))
					{
						$PetName = '-';
						$PetName = $_POST['PetName'];
						$PetAge = $_POST['PetAge'];
						$PetGender = $_POST['PetGender'];
						
						$con = mysqli_connect("localhost", "root", "", "npc");
						$sql = "SELECT * FROM pets WHERE PetName LIKE '%{$PetName}%' AND PetAge LIKE '%{$PetAge}%' AND PetGender LIKE '%{$PetGender}%'";
						$result = $con->query($sql);
						if ($result->num_rows > 0){
							echo "<table class ='petTable', border = '1'>";
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
						$con->close();
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
</body>
</html>