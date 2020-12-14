<?php
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
if ($counter != 0){
    $note = 'Число заходов на сайт = ' . $counter;
}else{
    $note = 'Вы первый раз на странице';
}
$counter++;
setcookie('counter', $counter, time() + 3600);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image</title>
</head>
<body>

<img src="img1.jpg"><br>
<?=$note?><br>
<a href="/">Вернуться на главную</a>
</body>
</html>

