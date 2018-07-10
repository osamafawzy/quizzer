<?php include 'database.php'; ?>
<?php
$stmt=$conn->prepare("select * from questions");
$stmt->execute();
$total = $stmt->rowCount();
?>
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
                <h2>Test Your PHP Knowledge</h2>
                <p>This is a multiple choice quiz to test your knowledge of php</p>
                <ul>
                    <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
                    <li><strong>Type: </strong>Multiple choice</li>
                    <li><strong>Estimated Time:</strong> <?php echo $total * 0.5 ?> Minutes</li>
                </ul>
                <a href="question.php?n=1" class="start">Start Quiz</a>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2016, PHP Quizzer
            </div>
        </footer>
    
    
    </body>

</html>