<?php 
 require_once('dbconnect.php');
		
		echo "<html>";
		echo"<head>";
		echo"<title>";
		echo"Add candidate";
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
		echo"Candidate Inforamaton";
		echo"</h1>"; 
		echo "<form action='action_show_added_candidate.php' method = 'post'align = 'center'>";
			$candidate_voter_id = $_POST['candidate_voter_id'];
			$candidate_name = $_POST['candidate_name'];
			echo "<select name = 'candidate_voter_id'hidden><option value = '".$candidate_voter_id."' selected>candidate_voter_id</option></select>";
			echo "<select name = 'candidate_name'hidden><option value = '".$candidate_name."' selected>candidate_name</option></select>";
			
				
			
				$sql_add_candidate="INSERT INTO candidate_info (candidate_voter_id,candidate_name,date_of_birth,sex,area,number_of_vote ) 
				VALUES ('".$_POST['candidate_voter_id']."','".$_POST['candidate_name']."','".$_POST['date_of_birth']."','".$_POST['sex']."','".$_POST['area']."','')";
				$result_add_candidate= mysqli_query($con, $sql_add_candidate);
				echo "<input type='submit' id='h2'value='Check if your given data added or not'class='link'>";
			
				
			
		echo "</form>";
		
		echo"<footer id='foot01'></footer>";
		echo"</div>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";
?>



