<!doctype html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: azure">

<p style="background-color: white;width: 100%;height: 100%; margin-bottom: 4rem;margin-h">1. $color = ['white', 'green', 'red', 'blue', 'black'];
    Write a script which will display the following string
    "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
    and the words 'red', 'green' and 'white' will come from $color.
</p>
<?php
function task1(array $color){
        echo '<p style="text-align: center">The memory of that scene for me is like a frame of film forever frozen at
        that moment:<br> the'. $color[2] .' carpet, the'.$color[1].' lawn, the'. $color[0].' house, the leade sky.
        The new president and his first lady. - Richard M. Nixon</p> <br><br>';
    }
   echo task1(['white', 'green','red','blue','black']);
?>


</body>
</html>
