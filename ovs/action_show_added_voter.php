<?php 
 require_once('dbconnect.php');
		
		echo "<html>";
		echo"<head>";
		echo"<title>";
		echo"Online Voting";
		echo"</title>";
		echo"<link href='style.css'rel='stylesheet'>";
		echo"<h4>";
		echo"Online Voting System";
		echo"</h4>";
		echo"</head>";
		echo"<body align ='center'> ";
		echo"<nav id='nav01'></nav>";
		echo"<div id='main'>";
		echo"<h1>";
		echo"Citizen Information";
		echo"</h1>"; 
		echo "<form>";
			
			$voter_id = $_POST['voter_id'];
			$voter_name = $_POST['voter_name'];
			echo "<select name = 'voter_id'hidden><option value = '".$voter_id."' selected>voter_id</option></select>";
			echo "<select name = 'voter_name'hidden><option value = '".$voter_name."' selected>voter_name</option></select>";
	 
				$sql_show_added_voter="SELECT voter_id, voter_name,date_of_birth,sex,area 
				FROM voter_info  WHERE voter_id='".$_POST['voter_id']."'and voter_name='".$_POST['voter_name']."'";
				$result_show_added_voter= mysqli_query($con, $sql_show_added_voter);
				if($result_show_added_voter->num_rows > 0)
	
					{
						echo"<h2>";
						echo"You added this Citizen";
						echo"</h2>";
							echo "<table align = 'center'>";
							echo "<tr><th>Id</th><th>Name</th><th>Date of Birth</th><th>Sex</th><th>Area</th></tr>";
							while ($row = $result_show_added_voter->fetch_assoc())  
							{
								echo "<tr><td>".$row['voter_id']."</td><td>".$row['voter_name']."</td><td>".$row['date_of_birth']."</td>
								<td>".$row['sex']."</td><td>".$row['area']."</td></tr>";
								}
								echo "</table>";
					}
	      
				else {
				echo "<h2 align = 'center'>Citizen is not Added</h2>";
				
					}			
		echo "</form>";
		
		echo"<footer id='foot01'></footer>";
		echo"</div>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";
?>



