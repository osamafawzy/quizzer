<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 

////    set question number
$number = $_GET['n'];
////get question
//$query = 'select * from questions where question_number = '.$number;
//$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
//$question = $result->fetch_assoc();
//
////get choices
//$query = 'select * from choices where question_number = '.$number;
//$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
//$chooses = $choices->fetch_assoc();

$stmt=$conn->prepare("select * from questions where question_number = $number");
$stmt->execute();
//assign to variables
$rows=$stmt->fetch();


$stmt=$conn->prepare("select * from choices where question_number = $number");
$stmt->execute();
//assign to variables
$chooses=$stmt->fetchAll();


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
                <div class="current">Question <?php echo $rows['question_number'] ?> of <?php echo $total; ?> </div>
                <p class="question">
                    
                    <?php  echo $rows['text']; ?>
                
                </p>
                <form method="post" action="process.php">
                    <ul class="choices">
                        <?php foreach($chooses as $row){?>
                            <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>   
                      <?php  }  ?>
                    </ul>
                    <input type="submit" value="submit">
                    <input type="hidden" name="number" value="<?php echo $number; ?>" >
                </form>
            
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2016, PHP Quizzer
            </div>
        </footer>
    
    
    </body>

</html>