<?php
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin: 0 200px;
            align-items: center;
        }
        a{
            padding: 80px;
            border-radius: 50%;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        a:hover{
            transform: scale(1.1);
        }
        #one{
            background: purple;
        }
        #two{
            background: yellow;
            color: black;
        }
        #three{
            background: aquamarine;
            color: purple;
        }
    </style>
</head>
<body>
<a href="1.php" id="one">1.php</a>
<a href="2.php" id="two">2.php</a>
<a href="3.php" id="three">3.php</a>
</body>
</html>
