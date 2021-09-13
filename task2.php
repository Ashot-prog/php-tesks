<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body style="background-color: azure">

<p style="background-color: white;width: 100%;height: 100%;text-align: center; margin-bottom: 4rem;margin-h">2. $color = ['white', 'green', 'red'] <br>
    Write a PHP script which will display the colors in the following way :<br>
    Output :<br>
    white, green, red,<br>
</p>
<?php
function task2 (array $colors)
{
    for ($i = 0; $i < count($colors); $i++) {
        echo '<p style="text-align: center">' . $colors[$i] . '</p> ';
    }
}
echo task2(['white', 'green','red']);
?>

</body>
</html>





