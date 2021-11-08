<?php
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<div>
<?php echo "\$a = 23" ?><br>
<?php echo "\$b = 7" ?><br>
<?php $a = 23 ?>
<?php $b = 7 ?>
<p>Целочисленное деление: a / b = <?php echo "$a / $b = ", intval($a/$b)  ?></p>
<p>Остаток от деления: a mod b = <?php echo "$a mod $b = ", fmod($a,$b)  ?></p>
</div>
<div class="menu">
    <a href="1.php" id="one">1.php</a>
    <a href="2.php" id="two">2.php</a>
    <a href="3.php" id="three">3.php</a>
    <a href="index.php" id="four">index</a>
</div>
</body>
</html>
