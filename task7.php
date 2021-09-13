<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head >
<body style="background-color: azure">

<p style="background-color: white;width: 100%;height: 100%;text-align: center; margin-bottom: 4rem;margin-h">
    7. Write a PHP script that inserts a new item in an array in any position.<br>
    Expected Output :<br>
    Original array :<br>
    1 2 3 4 5<br>
    After inserting '$' the array is :<br>
    1 2 3 $ 4 5<br>




</p>
<p style="text-align: center">
    <?php
    function task7(array $number)
    {
        array_splice($number, rand(0, count($number)), 0, '$');
        return $number;
    }
    print_r(task7([1, 2, 3, 4, 5,]));
    ?>
</p>
</body>
</html>




