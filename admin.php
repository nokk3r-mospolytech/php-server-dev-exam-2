<?php
if (isset($_POST)) {
    if ($_POST['name'] <> ''){
        if ($_POST['name'] <> '12345'){
            echo('Пароль не правилый <br> ');
        } else {
            print("Имя: " . $_POST['name']);
        }
        echo ('<form action="index.php">
<input type="submit" value="вернуться назад">
</form>');
    }
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
