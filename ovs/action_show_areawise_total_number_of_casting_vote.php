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
		$sql_areawise_total_number_of_casting_vote="SELECT COUNT(`voter_id`) FROM voter_info where area = '".$_POST['area']."' and status_of_voter = '1'";
		
	   $result_areawise_total_number_of_casting_vote = mysqli_query($con, $sql_areawise_total_number_of_casting_vote);
	    echo "<table align = 'center'>";
	   
	    while ($row = $result_areawise_total_number_of_casting_vote->fetch_assoc())  
	    {
			echo "<h3>The total number of casting vote of given area = ".$row['COUNT(`voter_id`)']."</h3>";
		}
		echo "</table>";
		}

		{
		$sql_show_persentage_of_casting_voter="SELECT ((SELECT COUNT(`voter_id`) FROM voter_info where status_of_voter = '1' and area = '".$_POST['area']."'  )
		*100/(SELECT COUNT(`voter_id`) FROM voter_info where area = '".$_POST['area']."' and (datediff(curdate(),date_of_birth)/ 365.249) >= '18') ) AS persentage FROM DUAL";
		$result_show_persentage_of_casting_voter = mysqli_query($con, $sql_show_persentage_of_casting_voter);
		while ($row = $result_show_persentage_of_casting_voter ->fetch_assoc())
		
		echo "<h3>The percentage of casting vote of given area = ".$row['persentage']." %</h3>";
		}
											
		echo "</form>";
		
		
		
		
		echo"</div>";
		
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	    echo"</html>";

	
		
				

?> 








