<?php 
 require_once('dbconnect.php');
		
		echo "<html>";
		echo"<head>";
		echo"<title>";
		echo"Add citizen";
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
		echo"Citizen Information";
		echo"</h1>"; 
		echo "<form action='action_show_added_voter.php' method = 'post'align = 'center'>";
			$voter_id = $_POST['voter_id'];
			$voter_name = $_POST['voter_name'];
			echo "<select name = 'voter_id'hidden><option value = '".$voter_id."' selected>voter_id</option></select>";
			echo "<select name = 'voter_name'hidden><option value = '".$voter_name."' selected>candidate_name</option></select>";
			$sql_add_voter="INSERT INTO voter_info (voter_id,voter_name,date_of_birth,sex,area,status_of_voter ) 
				VALUES ('".$_POST['voter_id']."','".$_POST['voter_name']."','".$_POST['date_of_birth']."','".$_POST['sex']."','".$_POST['area']."','')";
				$result_add_voter= mysqli_query($con, $sql_add_voter);
				echo "<input type='submit' id='h2'value='Check if your given data added or not'class='link'>";
			
		echo "</form>";
		
		echo"<footer id='foot01'></footer>";
		echo"</div>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";
?>


