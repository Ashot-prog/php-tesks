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
    9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.<br>
    Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62,<br>
    62, 65, 64, 68, 73, 75, 79, 73<br>
    Expected Output :<br>
    Average Temperature is : 70.6<br>
    List of seven lowest temperatures : 60, 62, 63, 63, 64,<br>
    List of seven highest temperatures : 76, 78, 79, 81, 85,<br>






</p>
<p style="text-align: center">
    <?php
    function task9(array $array)
    {

        sort($array);
        for ($i = 0; $i < 5; $i++) {
            echo $array[$i];
        }
        echo "<br><br>";

        rsort($array);
        for ($i = 0; $i < 5; $i++) {
            echo $array[$i];
        }
        echo "<br><br>";

        $g = 0;
        for ($i = 0; $i < count($array); $i++) {
            $g = $g + $array[$i];
        }

        echo $g / count($array);
    }
   return task9([78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 79 ]);

    ?>
</p>
</body>
</html>










