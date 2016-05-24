<?php

	require_once('dbconnect.php');
	$area = $_POST['area'];
	
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
		echo"Candidate result by election policy";
		echo"</h1>"; 
		
		echo "<form>";
		
		$sql_check_area=" SELECT area from candidate_info 
				WHERE area='".$_POST['area']."'";
		
				$result_check_area= mysqli_query($con, $sql_check_area);
		
				if($result_check_area ->num_rows > 0)
		
			{
				$sql_show_persentage_of_casting_voter="SELECT ((SELECT COUNT(`voter_id`) FROM voter_info where status_of_voter = '1' and area = '".$_POST['area']."'  )
				*100/(SELECT COUNT(`voter_id`) FROM voter_info where area = '".$_POST['area']."' and (datediff(curdate(),date_of_birth)/ 365.249) >= '18') ) AS persentage FROM DUAL";
				$result_show_persentage_of_casting_voter = mysqli_query($con, $sql_show_persentage_of_casting_voter);
				while ($row = $result_show_persentage_of_casting_voter ->fetch_assoc())
					{	
					echo "<h3>The percentage of casting vote of given area = ".$row['persentage']." %</h3>";
					$tv = $row['persentage'];
					}	
					if ($tv>= 50.0) 
				{
					
					$sql_check_minimum_vote="SELECT ((SELECT COUNT('voter_id') FROM voter_info where area ='". $area."' and 
					(datediff(curdate(),date_of_birth)/ 365.249) >= '18' )/(SELECT COUNT('candidate_voter_id') FROM candidate_info where area = '".$area."'))AS minimum_vote FROM DUAL" ;	
				
					$result_check_minimum_vote = mysqli_query($con, $sql_check_minimum_vote);
					while ($row = $result_check_minimum_vote ->fetch_assoc())
			
						{
							echo "<h3>The minimum excepting vote to win of this area = ".$row['minimum_vote']." vote</h3>";
							$min_v = $row['minimum_vote'];
						}
						if($result_check_minimum_vote ->num_rows > 0)
							{
							$sql_max_v="SELECT number_of_vote from candidate_info 
							WHERE area='".$area."'and number_of_vote = (SELECT MAX(number_of_vote) FROM (SELECT candidate_name, area, 
							number_of_vote FROM candidate_info WHERE area = '".$area."') as b)";
							$result_max_v= mysqli_query($con, $sql_max_v);
							while ($row = $result_max_v->fetch_assoc())
								{
									$max_v = $row['number_of_vote'];
								
								}
									if ($max_v>= $min_v)
									
									{
										
										$sql_show_area_wise_wining_candidate_result="SELECT candidate_name,area, number_of_vote from candidate_info 
										WHERE area='".$_POST['area']."' and number_of_vote = (SELECT MAX(number_of_vote) FROM (SELECT candidate_name, area, 
										number_of_vote FROM candidate_info WHERE area = '".$_POST['area']."') as b)";
		
										$result_show_area_wise_wining_candidate_result= mysqli_query($con, $sql_show_area_wise_wining_candidate_result);
		
										if($result_show_area_wise_wining_candidate_result ->num_rows > 0)
											{
												echo "<table align = 'center'>";
												echo "<tr><th>Candidate Name</th><th>Area</th><th>Total Vote</th></tr>";
												while ($row = $result_show_area_wise_wining_candidate_result->fetch_assoc())  
												{
													echo "<tr><td>".$row['candidate_name']."</td><td>".$row['area']."</td><td>".$row['number_of_vote']."</td></tr>";
												}
												echo "</table>";
											}
		
									}
									
						           else echo"<h3>Here is no wining candidate because any candidate do not get minimum excepting vote</h3>";
							}
					
					
				}
		
				else echo "<h3>Here casting vote is under 50%. So no candidate was Won</h3>";
			}
		
			else echo "<h3 align = 'center'>There is no area in this name</h3>";
			echo "</form>";
		
		
		echo"</div>";
		
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";
		
	      
				

?> 


