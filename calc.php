<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['send'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    switch ($_POST['action']){
        case 'plus':
            $result = $num1 + $num2;
        break;
        case 'minus':
        $result = $num1 - $num2;
        break;
        case 'division':
            $result = $num1 / $num2;
        break;
        case 'multiplication':
            $result = $num1 * $num2;
        break;
    }
}

?>
<form action="" method="post">
    Число №1:
    <input type="number" name="num1" id="" value="<?=$num1 ?? ''?>"><br><br>
    <select name="action" id="">
        <option value="plus" selected>Сложение</option>
        <option value="minus">Вычитание</option>
        <option value="division">Деление</option>
        <option value="multiplication">Умножение</option>
    </select><br><br>
    Число №2
    <input type="number" name="num2" id="" value="<?=$num2 ?? ''?>"><br><br>
    <input type="submit" name="send" value="Посчитать"><br><br>
    <?=$result ?? ''?>
</form>
