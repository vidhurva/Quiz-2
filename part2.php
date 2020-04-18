<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>PHP Quiz</title>

	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<div id="page-wrap">

	<h1>Midterm Quiz PHP Version</h1>

	<form action="ending.php" method="post" id="quiz">
					<ol>
							<li>
									<h3>What is Fordham's animal mascot? (First letter must be capital) </h3>
									<div>
											<input type="text" name="question-3-answers"/>
											<input type ="submit"/>
									</div>
							</li>
					</ol>
	</form>

				<?php
						$answer2 = $_POST['question-2-answers'];

						$Correct = 0;
						$totalQuestion = 2;

						if ($answer2 == "Rome") {
							$Correct++;
						}

						echo "<div id='results'>You scored $Correct / 1 on the last Question </div>";
						echo "<div id='results'>You completed $totalQuestion / 3 Questions </div>";
				?>

	</div>
</body>
</html>
