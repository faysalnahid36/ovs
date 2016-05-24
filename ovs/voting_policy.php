<?php 
	 require_once('dbconnect.php');
	 $voter_id = $_POST['voter_id'];
	 $sql="SELECT voter_id FROM voter_info WHERE voter_id = '".$_POST['voter_id']."'";
	 $result = mysqli_query($con, $sql);
	 if($result ->num_rows > 0)
		{
			while ($row = $result ->fetch_assoc())
			{
				
			$sql_check_eighteen_plus="SELECT floor(datediff(curdate(),date_of_birth)/ 365.249)AS age from `voter_info` where voter_id = '".$_POST['voter_id']."' and ((datediff(curdate(),date_of_birth)/ 365.249) >= '18')";
			$result_check_eighteen_plus = mysqli_query($con, $sql_check_eighteen_plus);
			if($result_check_eighteen_plus ->num_rows > 0)
					{
						while ($row = $result_check_eighteen_plus ->fetch_assoc())
						{
						
					$sql_status_check="SELECT area FROM voter_info WHERE voter_id = '".$_POST['voter_id']."' AND status_of_voter = 0";
					$result_status_check = mysqli_query($con, $sql_status_check);
	      
						if($result_status_check ->num_rows > 0)
							{
							while ($row = $result_status_check ->fetch_assoc())
								{
											$area = $row['area'];
											$sql_candidate = "SELECT candidate_name FROM candidate_info WHERE area = '".$area."'";
											$result_candidate = mysqli_query($con, $sql_candidate);
											
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
											echo"Give Vote";
											echo"</h1>"; 
											
											echo"<h3>";
												echo"You can give vote among them";
												echo"</h3>";
											
											echo "<form action='record_vote.php' method = 'post'align = 'center'>";
											echo "<select name = 'voter_id' hidden><option value = '".$voter_id."' selected>voter_id</option></select>";
											while ($row = $result_candidate ->fetch_assoc())
											
											{	
												echo "<p2>";
												echo "<input type ='radio' name ='candidate_name'value = '".$row['candidate_name']."'>".$row['candidate_name'];
												echo "<br><br>";
												echo "</p2>";
												
											}
											
											echo "<input type='submit' value='submit'>";
											echo "</form>";
											
											
											
											echo"</div>";
											
											echo"<footer id='foot01'></footer>";
											echo"<script src='script.js'></script>";
											echo"</body>";
											
											echo "</html>";
									}
								}
								
							else
							{
								
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
											echo"Give Vote";
											echo"</h1>"; 
											
											echo "<form action='record_vote.php' method = 'post'align = 'center'>";
											echo"<h3>";
											echo "You have already given vote";
											echo"</h3>";
											echo "</form>";
											
											
											
											echo"</div>";
											
											echo"<footer id='foot01'></footer>";
											echo"<script src='script.js'></script>";
											echo"</body>";
											
											echo "</html>";
								
							} 
									
								
						}
					
					}
				else{
					
					
											
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
					echo"Give Vote";
					echo"</h1>"; 
											
					echo "<form action='record_vote.php' method = 'post'align = 'center'>";
					
					$sql_check_date="SELECT floor(datediff(curdate(),date_of_birth)/ 365.249) AS AGE from `voter_info` where voter_id = '".$_POST['voter_id']."'";
					$result_check_date = mysqli_query($con, $sql_check_date);
						while ($row = $result_check_date ->fetch_assoc())
							echo "<h3 align = 'center' >Your age is : ".$row['AGE']." years</h3>";
											
					echo"<h3>";
					echo "You are under eighteen.You can not give vote";
					echo"</h3>";
											
					echo "</form>";
											
											
											
					echo"</div>";
											
					echo"<footer id='foot01'></footer>";
					echo"<script src='script.js'></script>";
					echo"</body>";
											
					echo "</html>";
								
					
					
					
					}
			 }	

				
		}
		  
								
								
	else
		{
								
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
		echo"Give Vote";
		echo"</h1>"; 
											
		echo "<form action='record_vote.php' method = 'post'align = 'center'>";
											
		echo"<h3>";
		echo "You are not registered voter";
		echo"</h3>";
											
		echo "</form>";
											
											
											
		echo"</div>";
											
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
											
		echo "</html>";
								
							} 
								
							
		  
	 
?>
