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
		echo"<h2>";
						echo"All Candidate list";
						echo"</h2>";
		
		echo "<form>";
		
		$sql_all_candidate_information="SELECT *, floor (datediff(curdate(),date_of_birth)/ 365.249)AS age FROM candidate_info";
	    $result_all_candidate_information= mysqli_query($con, $sql_all_candidate_information);
	    echo "<table align = 'center'>";
	   echo "<tr><th>Candidate Name</th><th>Candidate Id</th><th>Date of birth</th><th>Age</th><th>Sex</th><th>Area</th></tr>";
	    while ($row = $result_all_candidate_information->fetch_assoc())  
	    {
			echo "<tr><td>".$row['candidate_name']."</td><td>".$row['candidate_voter_id']."</td><td>".$row['date_of_birth']."</td>
			<td>".$row['age']."</td><td>".$row['sex']."</td><td>".$row['area']."</td></tr>";
		}
		echo "</table>";
	      
											
		echo "</form>";
		
		
		echo"</div>";
		
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";

?> 

