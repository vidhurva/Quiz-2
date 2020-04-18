<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>PHP Quiz</title>

	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Midterm Quiz PHP Version</h1>

				<?php
						$answer3 = $_POST['question-3-answers'];

						$Correct = 0;
						$totalQuestion = 3;

						if ($answer3 == "Ram") {
							$Correct++;
						}

						echo "<div id='results'>You scored $Correct / 1 on the last Question </div>";
						echo "<div id='results'>You completed $totalQuestion / 3 Questions </div>"
				?>

				<br>
				<?php
				echo "You have earned a bowl of ramen! Press the Eat! button to finish. Feel free to toggle the more ramen and eat buttons!";
				$image_url = "full.jpg";
				 ?> 
				<br>
				<br>

				<button onclick="Empty()" id="end">Eat Ramen!</button>
				<img id="myImg" src="full.jpg">
				<button onclick="More()">More Ramen!</button>
					<script>
						function Empty() {
							document.getElementById("myImg").src = "empty.jpg";
							document.body.style.backgroundColor = "#f5c6ef";
						}
						function More() {
							document.getElementById("myImg").src = "full.jpg";
							document.body.style.backgroundColor = "white";
						}
					</script>

	</div>
</body>
</html>
