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
		echo"<h1>All winning candidate list according to election policy</h1>"; 
		echo "<table align = 'center'>";
		echo "<tr><th>Candidate Name</th><th>Area</th><th>Total Vote</th></tr>";
			//get a list of areas
			$sql = "SELECT DISTINCT(area) FROM candidate_info";
			$result_list_area = mysqli_query($con, $sql);
			while($row = $result_list_area -> fetch_assoc())
			{
				$area = $row['area'];
				//check the minimum percentage of vote
				$sql = "SELECT ((SELECT COUNT(`voter_id`) FROM voter_info where status_of_voter = '1' and area = '".$area."')
				*100/(SELECT COUNT(`voter_id`) FROM voter_info where area = '".$area."' and (datediff(curdate(),date_of_birth)/ 365.249) >= '18') ) AS percentage FROM DUAL";
				$result_percentage = mysqli_query($con, $sql);
				while($row = $result_percentage -> fetch_assoc())
				{
					$percentage = $row['percentage'];					
				}
				if ($percentage >= 50.0)
				{	//check minimum vote
					$sql = "SELECT ((SELECT COUNT('voter_id') FROM voter_info where area ='".$area."' and 
					(datediff(curdate(),date_of_birth)/ 365.249) >= '18' )/(SELECT COUNT('candidate_voter_id') FROM candidate_info where area = '".$area."'))AS minimum_vote FROM DUAL";
					$result_minimum_vote = mysqli_query($con, $sql);
					while($row = $result_minimum_vote-> fetch_assoc())
					{
						$minimum_vote = $row['minimum_vote'];
						//check maximum vote
						$sql="SELECT number_of_vote from candidate_info 
							WHERE area='".$area."'and number_of_vote = (SELECT MAX(number_of_vote) FROM (SELECT candidate_name, area, 
							number_of_vote FROM candidate_info WHERE area = '".$area."') as b)";
							$result_maximum_vote= mysqli_query($con, $sql);
							while ($row = $result_maximum_vote->fetch_assoc())
								{
									$maximum_vote = $row['number_of_vote'];
								}
								if ($maximum_vote >= $minimum_vote )
								
									{
										$sql_show_area_wise_wining_candidate_result="SELECT candidate_name,area, number_of_vote from candidate_info 
										WHERE area='".$area."' and number_of_vote = (SELECT MAX(number_of_vote) FROM (SELECT candidate_name, area, 
										number_of_vote FROM candidate_info WHERE area = '".$area."') as b)";
		
										$result_show_area_wise_wining_candidate_result= mysqli_query($con, $sql_show_area_wise_wining_candidate_result);
										while ($row = $result_show_area_wise_wining_candidate_result->fetch_assoc())  
										{
												
												
												 
												{
													echo "<tr><td>".$row['candidate_name']."</td><td>".$row['area']."</td><td>".$row['number_of_vote']."</td></tr>";
												}
												
										}
										
										
		
									}
										
					}
				}
			}

			
			$sql_show_persentage_of_casting_voter="SELECT ((SELECT COUNT(`voter_id`) FROM voter_info where status_of_voter = '1' )
		*100/(SELECT COUNT(`voter_id`) FROM voter_info where (datediff(curdate(),date_of_birth)/ 365.249) >= '18' )) AS persentage FROM DUAL";
		$result_show_persentage_of_casting_voter = mysqli_query($con, $sql_show_persentage_of_casting_voter);
		while ($row = $result_show_persentage_of_casting_voter ->fetch_assoc())
		
		echo "<h3>The percentage of casting vote of this election  = ".$row['persentage']." %</h3>";
			
		
		
	echo "</table>";
	echo"</div>";
	echo"<footer id='foot01'></footer>";
	echo"<script src='script.js'></script>";
	echo"</body>";
	echo"</html>";
						

?>
