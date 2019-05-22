<?php

require "db.php";
$data = $_POST;
if(isset($data['do_login'])){
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if($user){
        // логин существует
        if(password_verify($data['password'], $user->password)){
            //Всё хорошо, логиним пользователя
            $_SESSION['logged_user'] = $user;
            echo '<div style="color:green;" >Вы авторизованы!<br>
            Можете перейти на <a href="index.php">главную</a> страницу</div><hr>';

        }else
        {
            $errors[] = 'Неверный пароль!';

        }
    }else{
        $errors[] = 'Пользователь с таким логином не найден!';
    }
    if (!empty($errors)) {

        echo '<div style="color:red;">' . array_shift($errors) . '</div><hr>';
    }
}
?>
<head>
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
</head>

<div id = "signIn" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="index.php" type="button"class="close" data-dismiss = "modal" >x</a>
                <h4 class="modal-title">Вход</h4>
            </div>
            <div class="modal-body">
                <div>
                    <form method="post" action="login.php" role = "form">
                        <div class="form-group">

                            <label for="login" class="control-label">Логин</label>
                            <input type="text" class="form-control" name = "login" placeholder="Введите логин ">
                            <label for="password" class="control-label">Пароль</label>
                            <input type="password" class="form-control" name = "password" placeholder="Введите пароль ">
                        </div>
                        <button class="btn btn-success" type="submit" name="do_login" onclick='location.href="index.php"'>Вход</button>
                    </form>
            </div>
            </div>
        </div>
    </div>
</div>