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
		echo"All wining candidate list";
		echo"</h2>";
		
		echo "<form>";
		
		$sql_all_wining_candidate_result="SELECT DISTINCT(area) FROM candidate_info";
		$result_all_wining_candidate_result= mysqli_query($con, $sql_all_wining_candidate_result);
		  echo "<table align = 'center'>";
	    echo "<tr><th>Candidate Name</th><th>Area</th><th>Total Vote</th></tr>";
		while ($row = $result_all_wining_candidate_result ->fetch_assoc())		
		{
			$sql_all_wining_candidate_result_1="SELECT candidate_name,area,number_of_vote from candidate_info 
			WHERE area='".$row['area']."' and number_of_vote = (SELECT MAX(number_of_vote) FROM (SELECT candidate_name,area,
			number_of_vote FROM candidate_info WHERE area = '".$row['area']."') as b)";
		
			$result_all_wining_candidate_result_1= mysqli_query($con, $sql_all_wining_candidate_result_1);
	  
			while ($row = $result_all_wining_candidate_result_1->fetch_assoc())  
			{
				echo "<tr><td>".$row['candidate_name']."</td><td>".$row['area']."</td><td>".$row['number_of_vote']."</td></tr>";
			}	      
		}
		{
		$sql_show_persentage_of_casting_voter="SELECT ((SELECT COUNT(`voter_id`) FROM voter_info where status_of_voter = '1' )
		*100/(SELECT COUNT(`voter_id`) FROM voter_info where (datediff(curdate(),date_of_birth)/ 365.249) >= '18' )) AS persentage FROM DUAL";
		$result_show_persentage_of_casting_voter = mysqli_query($con, $sql_show_persentage_of_casting_voter);
		while ($row = $result_show_persentage_of_casting_voter ->fetch_assoc())
		echo "<h3>The percentage of casting vote of this election  = ".$row['persentage']." %</h3>";	
		}
		echo "</table>";	
											
		echo "</form>";
		echo"</div>";
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";
	   
?> 

