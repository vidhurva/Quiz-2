<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>PHP Quiz</title>

	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

 <body>

	<div id="page-wrap">

		<h1>Midterm Quiz PHP Version</h1>

		<form action="part2.php" method="post" id="quiz">
				<h3>What is the capital of Italy? (First letter must be capital.)</h3>
					<div>
						<input type="text" name="question-2-answers"/>
						<input type ="submit"/>
					</div>
		 </form>

				<?php
						$answer1 = $_POST['question-1-answers'];

						$Correct = 0;
						$totalQuestion = 1;

						if ($answer1 == "36") {
							$Correct++;
						}

						echo "<div id='results'>You scored $Correct / 1 on the last Question </div>";
						echo "<div id='results'>You completed $totalQuestion / 3 </div>";
				?>
	 </div>
 </body>
</html>
