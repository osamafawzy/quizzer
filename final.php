<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Quizzer</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/stylee.css">
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
                <p>Congrats! You have completed the test</p>
                <p>Final score: <?php echo $_SESSION['score']; ?></p>
                <?php
                session_unset();
                session_destroy();
                ?>
                <a href="question.php?n=1" class="start">Take Again</a>
            
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2016, PHP Quizzer
            </div>
        </footer>
    
    
    </body>

</html>