<?php

require "db.php";

$data = $_POST;
if (isset($data['do_signup'])) {
    //здесь регистрируем
    $errors = array();
    if (trim($data['login'] == '')) {
        $errors[] = 'Введите логин!';
    }
    if (trim($data['email'] == '')) {
        $errors[] = 'Введите email!';
    }
    if (($data['password'] == '')) {
        $errors[] = 'Введите пароль!';
    }
    if (($data['password_2'] != $data['password'])) {
        $errors[] = 'Повторный пароль введен не верно!';
    }
    if (R::count('users', "login = ?", array($data['login'] )) > 0) {
        $errors[] = 'Пользователь с таким логином существует';
    }
    if (R::count('users', "email = ?", array($data['email'])) > 0) {
        $errors[] = 'Пользователь с таким email существует';
    }
    if (empty($errors)) {
            //Все хорошо
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($user);
        echo '<div style="color:green;">Вы успешно зарегестрированы <br>
Можее перейти на <a href="index.php">главную</a> страницу.</div><hr>';
    } else {
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
<div id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="index.php" type="button"class="close" data-dismiss = "modal" >x</a>
                <h4 class="modal-title">Регистрация</h4>
            </div>
            <div class="modal-body">
                <div>
                    <form method="post" action="signup.php" role = "form">
                        <div class="form-group">
                            <label for="login" class="control-label">Логин</label>
                            <input type="text" class="form-control" name = "login" placeholder="Введите логин "
                                   value="<?php echo @$data['login']?>">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" name = "email" placeholder="Введите email "
                                   value="<?php echo @$data['email']?>">
                            <label for="password" class="control-label">Ваш Пароль</label>
                            <input type="password" class="form-control" name = "password" placeholder="Введите пароль "
                                   value="<?php echo @$data['password']?>">
                            <label for="password" class="control-label">Введите пароль ещё раз</label>
                            <input type="password" class="form-control" name = "password_2" placeholder="Введите пароль ещё раз"
                                   value="<?php echo @$data['password_2']?>">

                        </div>
                        <button type="submit" name="do_signup" class="btn btn-success">Регистрация</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
