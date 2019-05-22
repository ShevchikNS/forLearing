
<?php
require "db.php";
//Получаем данные из глобальной переменной $_POST, так как мы передаем данные методом POST
$x = 1;

$capital1 = $_POST['ans1']; // Вытаскиваем ответ на первый вопрос в переменную
$capital2 = $_POST['ans2'];
$capital3 = $_POST['ans3'];
$capital4 = $_POST['ans4'];
$capital5 = $_POST['ans5'];

echo '<form method="post" action="test.php">';



    $result = 0; // результат будет в процентах правильных ответов

    if ($capital1 == "ihr") {
        $result += 20;
    }
    if ($capital2 == "") {
        $result += 20;
    }
    if ($capital3 == "wer") {
        $result += 20;
    }
    if ($capital4 == "") {
        $result += 20;
    }
    if ($capital5 == "ihn") {
        $result += 20;
    }


    echo "<center>Вы прошли тест на <strong>$result%</strong></center>";
    echo '<div style="color:green;" >Вы прошли тест!<br>
            Можете перейти на <a href="index.php">главную</a> страницу</div><hr>';


