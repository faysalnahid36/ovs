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
		echo"<h1>";
		echo"Admin Panel";
		echo"</h1>"; 
		
		echo "<form action='add_voter_info.php' method = 'post'align = 'center'>";
		 $admin_id = $_POST['admin_id'];
		 $admin_password = $_POST['admin_password'];
	     $sql_admin_login="SELECT admin_id and admin_password FROM admin_info WHERE admin_id = '".$_POST['admin_id']."'and 
	     admin_password = '".$_POST['admin_password']."'";
	      $result_admin_login = mysqli_query($con, $sql_admin_login);
	      if($result_admin_login ->num_rows > 0)
			{	
				echo "<select name = 'admin_id' hidden><option value = '".$admin_id."' selected>admin_id</option></select>";
				echo "<select name = 'admin_password' hidden><option value = '".$admin_password."' selected>admin_password</option></select>";
				
				echo "<input type='submit' id='h2'value='Add a citizen'class='link'>";
				
						
			}
		    else {
				echo "<h2 align = 'center'>Not logged in</h2>";
				echo "<h3 align = 'center'>It may you are not registered or your given ID and Pasword are not matched</h3>";
					}			
		echo "</form>";
		
		
		
		echo "<form action='add_candidate_info.php' method = 'post'align = 'center'>";
		 $admin_id = $_POST['admin_id'];
		 $admin_password = $_POST['admin_password'];
	     $sql_admin_login="SELECT admin_id and admin_password FROM admin_info WHERE admin_id = '".$_POST['admin_id']."'and 
	     admin_password = '".$_POST['admin_password']."'";
	      $result_admin_login = mysqli_query($con, $sql_admin_login);
	      if($result_admin_login ->num_rows > 0)
			{	
				echo "<select name = 'admin_id' hidden><option value = '".$admin_id."' selected>admin_id</option></select>";
				echo "<select name = 'admin_password' hidden><option value = '".$admin_password."' selected>admin_password</option></select>";
				echo "<input type='submit' id='h2'value='Add a candidate'class='link'>";
				
			}
		    		
		echo "</form>";
		
		echo"<footer id='foot01'></footer>";
		echo"</div>";
		echo"<script src='script.js'></script>";
		echo"</body>";
	  echo"</html>";
?>

