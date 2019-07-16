<?php
require('car.php');
require('ferrari.php');

$ferrari = new Ferrari();

if(isset($_POST['up']) && $_POST['up'] === 'true') {
    $ferrari->liftup();
    } else {
    $ferrari->speed;
    $ferrari->liftup;
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liftup</title>
</head>
<body>
    <form method="post" action="">
        <span>
            <?php 
            print($ferrari->maker . ':<br/>');
            print('加速：' . $ferrari->speed . 'km/h<br/>'); 
            print('車高：' . $ferrari->liftup . 'mm<br/>'); ?>
        </span>
        <hr>
        <span>リフトアップ</span><br/><br/>
        <span>オン</span>
        <input type="radio" name="up" value="true"><br/>
        <span>オフ</span>
        <input type="radio" name="up" value="false"><br/>

        <input type="submit" value="送信する">

    </form>
</body>
</html>