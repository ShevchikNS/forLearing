<?php

require "db.php";

if (isset($_SESSION['logged_user'])):?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
    <head>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Интернет-магазин </title>
        <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
    </head>
    <body class="bodycolor">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">LOGO</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="books.php">Каталог книг</a></li>
                    <li><a href="tests.php">Тесты</a></li>
                    <li><a href="">Привет, <?php echo $_SESSION['logged_user']->login; ?></li>
                    </a>
                    <li><a href="logout.php">Выйти</a></li>
                </ul>
            </div>
        </div>
    </nav>

    </body>
    </html>

<?php else : ?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
    <head>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Интернет-магазин </title>
        <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
    </head>
    <body class="bodycolor">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">LOGO</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="books.php">Каталог книг</a></li>
                    <li><a href="signup.php">Регистрация</a></li>
                    <li><a href="login.php">Авторизация</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </body>
    </html>

    <br>
<?php endif;
?>
<?php
$dbUser = 'root';
$dbName = 'portal';
$dbPass = '';
$mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
$query = "set names utf8";
$mysqli->query($query);
$query = "Select * from  book;";
$results = $mysqli->query($query);
while ($row = $results->fetch_assoc()) {
    echo ' 
    <div class="stl">
    <section>
        <img src="' . $row["ulrIMG"] . '.jpg">

    </section style = " padding:200px">
    <aside>
        <div class="bookName"><b>Название:</b> ' . $row["bookName"] . '</div>
        <div class="author"><b>Автор:</b> ' . $row["author"] . '  </div>
        <div class="year"><b>Год выпуска:</b> ' . $row["year"] . '  </div>
        <div class="aboutBook"><b>О Книге:</b> ' . $row["aboutBook"] . '</div>
        <a href="' . $row["url"] . '">Читать книгу</a>
    </aside>
    
</div>';
}






