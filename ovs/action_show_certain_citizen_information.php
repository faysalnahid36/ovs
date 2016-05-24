<?php

	require_once('dbconnect.php');
	echo "<html>";
		echo"<head>";
		echo"<title>";
		echo"Online Voting";
		echo"</title>";
		echo"<link href='style.css'rel='stylesheet'>";
		echo"<h4>";
		echo"Online Votinig System";
		echo"</h4>"; 
		echo"</head>";
		echo"<body align ='center'> ";
		echo"<nav id='nav01'></nav>";
		echo"<div id='main'>";
		echo"<h1>";
		echo"Citizen Information";
		echo"</h1>"; 
		echo "<form>";
		$sql_a_certain_citizen_information="SELECT *, floor (datediff(curdate(),date_of_birth)/ 365.249)AS age FROM voter_info 
		  WHERE voter_id = '".$_POST['voter_id']."' ";
	    $result_a_certain_citizen_information= mysqli_query($con, $sql_a_certain_citizen_information);
	    if($result_a_certain_citizen_information ->num_rows > 0)
	    {
	    echo "<table align = 'center'>";
	     echo "<tr><th>Id Number</th><th>Name</th><th>Date of Birth</th><th>Age</th><th>Sex</th><th>Area</th>
	    </tr>";
	    while ($row = $result_a_certain_citizen_information->fetch_assoc())  
	    {
			echo "<tr><td>".$row['voter_id']."</td><td>".$row['voter_name']."</td><td>".$row['date_of_birth']."</td><td>".$row['age']."</td>
			<td>".$row['sex']."</td><td>".$row['area']."</td></tr>";
		}
		echo "</table>";
		}
	    else echo "<h3 align = 'center'>This is not registered voter Id</h3>";									
		echo "</form>";
		echo"</div>";
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";

	
?> 


