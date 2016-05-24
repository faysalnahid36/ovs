<html>
		<head>
			<title>certain voter information</title>
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
			<h1>Voter information</h1>
			<form action ="action_show_certain_voter_information.php" method = "post" >
                <div name = "Voter_Id">
					
					
					<table align ="center"style="width:100%">
					<tr>
					<th> <h5>Enter a voter ID:</h5>
					<th><input type ="text" name ="voter_id" required></th>
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
