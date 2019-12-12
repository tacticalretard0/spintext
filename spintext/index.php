<!DOCTYPE html>
<html>
	
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Enter Text</title>
		<link rel="shortcut icon" href="https://i.imgur.com/jWr67J8.png?1" />

		<style>
					
			#textbox {
				width: 250px;
				height: 100px;
				font-size: 40pt;
				
				}

			#button {
				width: 100px;
				height: 50px;
				
				}
				
		</style>
		
	</head>

	<body>
		
		<form action="result.php" method="GET">
			
			<input type="text" id="textbox" name="text"/>
			
			<br>
			
			<input type="range" min="10" max="50" value="10" name="speed" onchange="update(this.value)">
			
			<p id="speedtext"></p>
			
			<br>
			
			<input id="button" type="submit"/>
			
			
		</form>
		
		<script>
			var speedtext = document.getElementById("speedtext");
			
			function update(value){
					speedtext.innerText = "speed: " + (value / 10) + "s";
				}
			
		</script>
		
	</body>
</html>
