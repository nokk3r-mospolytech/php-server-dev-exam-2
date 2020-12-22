<?php
include("session-list.php");
$bop = $answers;

function passCheck($password)
{
    if ($password <> '') {
        if ($password == '12345') {
            header("Location: admin.php", true, 301);
            exit;
        }
    }
}

if (!isset($_POST['password']))
    $_POST['password'] = '';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Цифровая версия</title>
</head>
<body>
<?php
if (!isset($_POST['password']))
    $_POST['password'] = '';
echo '<form action="' . passCheck($_POST['password']) . '" method="post">
    <h1>Вход</h1>
    <label for="password">Пароль: </label>
    <input type="text" name="password" id="password" required placeholder="Введите пароль">
    <input type="submit" value="Войти">
</form>'
?>
<br>
<?php
$i = count($bop);
$d = 1;
While ($i > 0){
    echo '<form action="Session/session'.$d.'.php">
<input type="submit" value="выполнить тест №'.$d.'">
</form><br>';
    $d+=1;
    $i-=1;
}
?>
</body>
</html>
