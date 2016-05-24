<html>
		<head>
			<title> Add Voter</title>
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
			
			<h1>Show Candidate Result</h1> 
		
				<form action ="Action_Show_a_certain_candidate_result.php" method = "post" >
				  <div name = "show_candidate_result">
					  <table align ="center"style="width:100%">
					<tr>
					<th> <h5>Enter a Candidate Name:</h5>
					<th><input type ="text" name ="candidate_name" required></th>
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
