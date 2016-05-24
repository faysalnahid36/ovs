<html>
		<head>
			<title> Admin panel login</title>
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
			
			<h1>Admin Panel Login</h1> 
		
		<form action ="admin_login.php" method = "post" >
                <div name = "admin_id">
					
					<table align ="center"style="width:100%">
					<tr>
					<th> <h5>Enter Admin ID: </h5>
					<th><input type ="text" name ="admin_id" required></th>
					</tr>
					<tr>
					<th> <h5>Enter Password: </h5>
					<th><input type ="password" name ="admin_password" required></th>
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

