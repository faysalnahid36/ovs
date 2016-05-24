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
		echo"Voter Information";
		echo"</h1>"; 
		echo "<form>";
		$sql_a_certain_voter_information="SELECT *, floor (datediff(curdate(),date_of_birth)/ 365.249)AS age FROM voter_info 
		  WHERE voter_id = '".$_POST['voter_id']."' and ((datediff(curdate(),date_of_birth)/ 365.249) >= '18')";
	    $result_a_certain_voter_information= mysqli_query($con, $sql_a_certain_voter_information);
	   if($result_a_certain_voter_information ->num_rows > 0)
	    {
	    echo "<table align = 'center'>";
	   echo "<tr><th>Voter Id Number</th><th>Voter Name</th><th>Date of Birth</th><th>Age</th><th>Sex</th><th>Area</th>
	    <th> Given Number of Vote</th></tr>";
	    while ($row = $result_a_certain_voter_information->fetch_assoc())  
	    {
			echo "<tr><td>".$row['voter_id']."</td><td>".$row['voter_name']."</td><td>".$row['date_of_birth']."</td><td>".$row['age']."</td>
			<td>".$row['sex']."</td><td>".$row['area']."</td><td>".$row['status_of_voter']."</td></tr>";
		}
		echo "</table>";
		}
	    else echo "<h3 align = 'center'>This is not registered VOTER ID till now</h3>";									
		echo "</form>";
		echo"</div>";
		echo"<footer id='foot01'></footer>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";

	
?> 


