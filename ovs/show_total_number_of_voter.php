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
		
		echo "<h1 align = 'center' >Total number of voter</h1>";
		echo "<form>";
		$sql_total_number_of_voter= "SELECT COUNT(`voter_id`) FROM voter_info where (datediff(curdate(),date_of_birth)/ 365.249) >= '18' ";
		
	   $result_total_number_of_voter = mysqli_query($con, $sql_total_number_of_voter);
	    echo "<table align = 'center'>";
	   
	    while ($row = $result_total_number_of_voter->fetch_assoc())  
	    {
			echo "<tr><td><h2 align = 'center' >The total number of voter = ".$row['COUNT(`voter_id`)']."</h2></td></tr>";
		}
		echo "</table>";									
		echo "</form>";
		echo"</div>";
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	    echo"</html>";
?> 








