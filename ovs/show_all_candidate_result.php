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
		echo"<body align ='center'>";
		echo"<nav id='nav01'></nav>";
		echo"<div id='main'>";
		echo"<h2>";
						echo"All Candidate result";
						echo"</h2>";
		
		echo "<form>";
		
		$sql_all_candidate_result="SELECT candidate_name, area,number_of_vote FROM candidate_info";
	    $result_all_candidate_result= mysqli_query($con, $sql_all_candidate_result);
	    echo "<table align = 'center'>";
	    echo "<tr><th>Candidate Name</th><th>Area</th><th>Total Vote</th></tr>";
	    while ($row = $result_all_candidate_result->fetch_assoc())  
	    {
			echo "<tr><td>".$row['candidate_name']."</td><td>".$row['area']."</td><td>".$row['number_of_vote']."</td></tr>";
		}
		echo "</table>";
	      
											
		echo "</form>";
		
		
		echo"</div>";
		
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";

?> 

