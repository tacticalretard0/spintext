<!DOCTYPE html>
<html>
	<head>

		<title>spin</title>
		<link rel="shortcut icon" href="https://i.imgur.com/jWr67J8.png?1" />

		<style>
			@keyframes text-animation {
					from {transform: rotateY(0deg)}
					to {transform: rotateY(360deg)}
				}

			@keyframes text-animation-color {
					from {color: red}
					to{color: blue}
				}

			@keyframes depth {
  					0% { text-shadow: 0 0 black; }
  					25% { text-shadow: 1px 0 black, 2px 0 black, 3px 0 black, 4px 0 black, 5px 0 black; }
  					50% { text-shadow: 0 0 black; }
  					75% { text-shadow: -1px 0 black, -2px 0 black, -3px 0 black, -4px 0 black, -5px 0 black; }
					100% { text-shadow: 0 0 black; }
}


			#text{
					font-size: 200px;
					font-family: sans-serif;
					text-align: center;
				
					animation: text-animation 2s infinite linear, text-animation-color 1s alternate infinite linear, depth 2s infinite linear;

		</style>
		
	</head>

	<body>
			
		<p id="text"><?php echo strlen(trim($_GET["input"])) ? htmlspecialchars($_GET["input"]) : "which way am i spinning?"; ?></p>
		
	</body>
	
</html>
