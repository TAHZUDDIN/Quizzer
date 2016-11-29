<?php session_start(); ?>
<html>
<head>
	

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
        <div class="container">
        	<h1>PHP Quizzer</h1>

        </div>

	</header>

	<main>

       <div class="container">
            <h2>You are Done</h2>
            <p>Congrets ! You have completed the test</p>
            <p>Final score! <?php echo $_SESSION['score']; ?></p>
            <a href="question.php?n=1" class="start">Take Again</a>
       </div>

	</main>


	<footer>
         <div class="container">
             Copyright & copy PHP Quizer
       </div>
	</footer>

</body>
</html>
