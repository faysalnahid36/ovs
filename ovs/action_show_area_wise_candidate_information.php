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
		
		echo "<form>";
		
		echo"<h1>";
		echo"Candidate Information";
		echo"</h1>";
		
		$sql_show_area_wise_candidate_information="SELECT *, floor (datediff(curdate(),date_of_birth)/ 365.249)AS age FROM candidate_info 
		  WHERE area = '".$_POST['area']."'";
	    $result_show_area_wise_candidate_information= mysqli_query($con, $sql_show_area_wise_candidate_information);
	    if($result_show_area_wise_candidate_information ->num_rows > 0)
	    {
	    echo "<table align = 'center'>";
	    echo "<tr><th>Candidate Name</th><th>Candidate Id</th><th>Date of birth</th><th>Age</th><th>Sex</th><th>Area</th></tr>";
	    while ($row = $result_show_area_wise_candidate_information->fetch_assoc())  
	    {
			echo "<tr><td>".$row['candidate_name']."</td><td>".$row['candidate_voter_id']."</td><td>".$row['date_of_birth']."</td><td>".$row['age']."</td><td>".$row['sex']."</td><td>".$row['area']."</td></tr>";
		}
		echo "</table>";
		}
	    else echo "<h3> There is no area in this name </h3>";
		echo "</form>";
		
		echo"</div>";
		
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";

		

?> 
