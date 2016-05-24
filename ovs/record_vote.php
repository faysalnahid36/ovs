<?php

	require_once('dbconnect.php');
	 $voter_id = $_POST['voter_id'];
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
		
		echo "<form>";
		$sql_status_check="SELECT voter_id FROM voter_info WHERE voter_id = '".$_POST['voter_id']."' AND status_of_voter = 0";
		$result_status_check = mysqli_query($con, $sql_status_check);
	     if($result_status_check ->num_rows > 0)
			{
				while ($row = $result_status_check ->fetch_assoc())
					{
					$sql="UPDATE candidate_info SET number_of_vote = number_of_vote + 1 WHERE candidate_name = '".$_POST['candidate_name']."'";
					if($result = mysqli_query($con, $sql))
						{
							$sql_status_record ="UPDATE voter_info SET status_of_voter = 1 WHERE voter_id = '".$_POST['voter_id']."'";
							mysqli_query($con,$sql_status_record);
							
							echo"<h3>";
							echo "Vote recorded";
							echo"</h3>";
							
						}   
							else {echo"<h3>";
							echo "Vote not recorded";
							echo"</h3>";}
					}
			}
		  
				else {  echo"<h3>";
						echo "You have already given vote";	
						echo"</h3>";}
											
		echo "</form>";
		
		
		echo"</div>";
		
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";
	    	
?> 
