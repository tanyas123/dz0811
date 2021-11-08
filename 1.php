<?php
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<pre>
    <?php echo "\$a = 4" ?><br>
    <?php echo "\$b = 2" ?>
    <?php $a = 4 ?>
    <?php $b = 2 ?>
    <p> a + b = <?php echo "$a + $b = ", $b + $a  ?></p>
    <p> a - b = <?php echo "$a - $b = ", $a - $b  ?></p>
    <p> a / b = <?php echo "$a / $b = ", $a / $b  ?></p>
    <p> a * b = <?php echo "$a * $b = ", $a * $b  ?></p>
    <p> a ^ b = <?php echo "$a ^ $b = ", $a ** $b  ?></p>
</pre>
<div class="menu">
    <a href="1.php" id="one">1.php</a>
    <a href="2.php" id="two">2.php</a>
    <a href="3.php" id="three">3.php</a>
    <a href="index.php" id="four">index</a>
</div>
</body>
</html>
