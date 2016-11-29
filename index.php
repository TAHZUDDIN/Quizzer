<?php include 'database.php';?>

<?php
/*
     Get the total number of questions
*/

     $query = "SELECT * FROM questions";
     
     //Get result
     $results = $mysqli->query($query)or die($mysqli->error.__LINE__);

     $total = $results->num_rows;

?>

<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
        <div class="container">
        	<h1>PHP quizzer</h1>

        </div>

	</header>

	<main>

       <div class="container">
             <h2>Test your PHP knowledge</h2>
             <p>This is a multiple choice quize to test your knowledge of PHP</p>
             <ul>

                 <li><strong>Number of Questions: </strong> <?php echo $total; ?></li>
                 <li><strong>Type: </strong> Multiple Choice</li>
                 <li><strong>Estimated time: </strong> <?php echo $total * .5; ?> minutes</li>
             </ul>

             <a href="question.php?n=1" class="start">Start Quiz</a>
       </div>

	</main>


	<footer>
         <div class="container">
             Copyright & copy PHP Quizer
       </div>
	</footer>

</body>
</html>
