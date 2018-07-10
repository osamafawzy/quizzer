<?php include 'database.php'; ?>
<?php session_start(); ?>

<?php

//check to see if score session is set
if(!isset ($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if($_POST){
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;
}
//select correct answer
$stmt=$conn->prepare("select * from choices where question_number = $number and is_correct = 1");
$stmt->execute();
$row = $stmt->fetch();
$correct_choice = $row['id'];
//comapre
if($correct_choice == $selected_choice){
    $_SESSION['score']++;
}

//get number of total questions
$stmt=$conn->prepare("select * from questions");
$stmt->execute();
$total = $stmt->rowCount();

//check if last question
if($number == $total){
    header("Location: final.php");
    exit();
}else{
    header("Location: question.php?n= $next ");
}

?>