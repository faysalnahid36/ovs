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
		
		echo "<h1 align = 'center' >Total number of casting vote</h1>";
		echo "<form>";
		{
		$sql_total_number_of_casting_voter="SELECT COUNT(`voter_id`) FROM voter_info where status_of_voter = '1'";
		
	   $result_total_number_of_casting_voter = mysqli_query($con, $sql_total_number_of_casting_voter);
	    echo "<table align = 'center'>";
	   
	    while ($row = $result_total_number_of_casting_voter->fetch_assoc())  
	    {
			echo "<h3>The total number of casting vote of this election = ".$row['COUNT(`voter_id`)']."</h3>";
		}
		echo "</table>";
	      
		}
		
		{
		$sql_show_persentage_of_casting_voter="SELECT ((SELECT COUNT(`voter_id`) FROM voter_info where status_of_voter = '1' )
		*100/(SELECT COUNT(`voter_id`) FROM voter_info where (datediff(curdate(),date_of_birth)/ 365.249) >= '18' )) AS persentage FROM DUAL";
		$result_show_persentage_of_casting_voter = mysqli_query($con, $sql_show_persentage_of_casting_voter);
		while ($row = $result_show_persentage_of_casting_voter ->fetch_assoc())
		
		echo "<h3>The percentage of casting vote of this election  = ".$row['persentage']." %</h3>";
			
		}
		
		echo "</form>";
		echo"</div>";
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	    echo"</html>";

?> 








