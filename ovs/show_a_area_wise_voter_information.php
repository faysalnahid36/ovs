<html>
		<head>
			<title> Area wise voter information</title>
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
			
			<h1>Show areawise Voter Information</h1> 
		
		<form action ="action_show_a_area_wise_voter_information.php" method = "post" >
                <div name = "show_area_wise_voter">
					
					<table align ="center"style="width:100%">
					<tr>
					<th> <h5>Enter a name of Area:</h5>
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




