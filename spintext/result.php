<?php 
	$speed = isset($_GET["speed"]) ? strval($_GET["speed"] / 10) . "s" : "1s";
	$speed_half = isset($_GET["speed"]) ? strval(($_GET["speed"] / 2) / 10) . "s" : "0.5s";
	
	if ($speed > 5 || $speed <= 1){
		$speed = "2s";
		$speed_half = "1s";
	}

?>


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
				
					animation: text-animation <?php echo $speed ?> infinite linear, text-animation-color <?php echo $speed_half; ?> alternate infinite linear, depth <?php echo $speed ?> infinite linear;

		</style>
		
	</head>

	<body>
			
		<p id="text"><?php echo strlen(trim($_GET["text"])) ? htmlspecialchars($_GET["text"]) : "which way am i spinning?"; ?></p>
		
	</body>
	
</html>
