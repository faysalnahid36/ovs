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
		echo"Candidate Information";
		echo"</h1>"; 
		echo "<form>";
			
			$candidate_voter_id = $_POST['candidate_voter_id'];
			$candidate_name = $_POST['candidate_name'];
			echo "<select name = 'candidate_voter_id'hidden><option value = '".$candidate_voter_id."' selected>candidate_voter_id</option></select>";
			echo "<select name = 'candidate_name'hidden><option value = '".$candidate_name."' selected>candidate_name</option></select>";
				
				$sql_show_added_candidate="SELECT candidate_voter_id,candidate_name,date_of_birth,sex,area 
				FROM candidate_info  WHERE candidate_voter_id='".$_POST['candidate_voter_id']."'and candidate_name='".$_POST['candidate_name']."'";
				$result_show_added_candidate= mysqli_query($con, $sql_show_added_candidate);
				if($result_show_added_candidate->num_rows > 0)
	
					{
						echo"<h2>";
						echo"You added this candidate";
						echo"</h2>";
							echo "<table align = 'center'>";
							echo "<tr><th>Voter Id</th><th>Candidate Name</th><th>Date of Birth</th><th>Sex</th><th>Area</th></tr>";
							while ($row = $result_show_added_candidate->fetch_assoc())  
							{
								echo "<tr><td>".$row['candidate_voter_id']."</td><td>".$row['candidate_name']."</td><td>".$row['date_of_birth']."</td>
								<td>".$row['sex']."</td><td>".$row['area']."</td></tr>";
								}
								echo "</table>";
					}
	      
				else {
				echo "<h2 align = 'center'>Candidate is not Added</h2>";
				
					}			
		echo "</form>";
		
		echo"<footer id='foot01'></footer>";
		echo"</div>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";
?>




