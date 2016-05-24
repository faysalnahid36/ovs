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
		
		echo "<h1 align = 'center' >Total number of candidate</h1>";
		echo "<form>";
		$sql_areawise_total_number_of_candidate="SELECT COUNT(`candidate_voter_id`) FROM candidate_info where area = '".$_POST['area']."'";
		
	   $result_areawise_total_number_of_candidate = mysqli_query($con, $sql_areawise_total_number_of_candidate);
	    echo "<table align = 'center'>";
	   
	    while ($row = $result_areawise_total_number_of_candidate->fetch_assoc())  
	    {
			echo "<tr><td><h2 align = 'center' >The total number of voter of  given area = ".$row['COUNT(`candidate_voter_id`)']."</h2></td></tr>";
		}
		echo "</table>";
	      
											
		echo "</form>";
		
		
		
		
		echo"</div>";
		
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	    echo"</html>";

	
		
				

?> 








