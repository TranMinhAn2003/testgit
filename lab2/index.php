<?php
require_once 'question.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST">
    <div class="container mt-5">
    <?php
    
    $curent_quest=[];
    $ansewers=[];
    foreach ($questions as $line) {
       
    if (strpos($line, "Câu") === 0) {
        if (!empty($curent_quest)) {
            echo "<div class='card mb-4'>";
            echo "<div class='card-header'><strong>{$curent_quest[0]}</strong></div>";
            echo "<div class='card-body'>";
            for ($i = 1; $i <= 4; $i++) {
                $answer = substr($curent_quest[$i], 0, 1); 
                echo "<div class='form-check'>";
                echo "<input class='form-check-input' type='radio' name='question{$curent_quest[0]}' value='{$answer}' id='question{$curent_quest[0]}{$answer}'>";
                echo "<label class='form-check-label' for='question{$curent_quest[0]}{$answer}'>{$curent_quest[$i]}</label>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
        }
        $curent_quest = [];
    }
    $curent_quest[] = $line;
    if (strpos($line, "Đáp án:") !== false) {
        $answers[] = trim(substr($line, strpos($line, ":") + 1)); 
    }
}
?>
    </div>
    <div class="text-center">    <button type="submit" class="btn btn-primary ">Nộp bài</button>
</div>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST") {
        $answers = [];
    foreach ($questions as $line) {
        if (strpos($line, "Đáp án:") !== false) {
            $answers[] = trim(substr($line, strpos($line, ":") + 1));
        }
    }
    
    $score = 0;
    foreach ($_POST as $key => $userAnswer) {
        $questionNumber = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);
        if (isset($answers[$questionNumber - 1]) && $answers[$questionNumber - 1] === $userAnswer) {
            $score++;
        }
    }
    
        echo "<div class='alert alert-success text-center'>";
        echo "Bạn trả lời đúng <strong>$score</strong>/" . count($answers) . " câu.";
        echo "</div>";
        echo "<div class='text-center'>";
        echo "<a href='index.php' class='btn btn-primary'>Làm lại</a>";
        echo "</div>";
    }
    
    
    ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>