<html>
		<head>
			<title> Add citizen</title>
			<link href="style.css" rel="stylesheet">
			<h4>
				Online Voting System
			</h4>
			<style>
		table,td,th {
			border: none;
			wid
		}
		
		A{text-decoration:none}
		
		
		
		</style>	
			</head>
			<body align ="center"> 
			<nav id="nav01"></nav>
			<div id="main">
			
			<h1>Add a Citizen</h1> 
		
				<form action ="action_add_voter_info.php" method = "post" >
				  <div name = "add_voter">
					  <table align ="center"style="width:100%">
					<tr>
					<th> <h5>Id:</h5>
					<th><input type ="text" name ="voter_id" required></th>
					</tr>
					
					<tr>
					<th> <h5>Name:</h5>
					<th><input type ="text" name ="voter_name" required></th>
					</tr>
					
					<tr>
					<th> <h5>Date of birth:</h5>
					<th><input type ="date" name ="date_of_birth" required></th>
					</tr>
					
					<tr>
					<th> <h5>Sex:</h5>
					<th><input type ="text" name ="sex" required></th>
					</tr>
					
					<tr>
					<th> <h5>Area:</h5>
					<th><input type ="text" name ="area" required></th>
					</tr>
					  </table>
				
			  	  
                  <input type="submit" value="Submit">
                </div>
               
           </form>
		</div>
		<footer id="foot01"></footer>
		<script src="script.js"></script>
	</body>
</html>











