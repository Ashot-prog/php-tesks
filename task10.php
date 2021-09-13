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
    Write a PHP program to sort an array of positive integers using the Bead-Sort Algorithm.According to Wikipedia "Bead-sort is a natural sorting algorithm, developed by Joshua J. Arulanandham, Cristian S. Calude and Michael J. Dinneen in 2002. Both digital and analog hardware implementations of bead sort can achieve a sorting time of O(n); however, the implementation of this algorithm tends to be significantly slower in software and can only be used to sort lists of positive integers".<br>

    Input array : Array ( [0] => 5 [1] => 3 [2] => 1 [3] => 3 [4] => 8 [5] => 7 [6] => 4 [7] => 1 [8] => 1 [9] => 3 )<br>
    Expected Result : Array ( [0] => 8 [1] => 7 [2] => 5 [3] => 4 [4] => 3 [5] => 3 [6] => 3 [7] => 1 [8] => 1 [9] => 1 )<br>
</p>
<p style="text-align: center">
    <?php
    function columns($uarr) {
        $n=$uarr;
        if (count($n) == 0)
            return array();
        else if (count($n) == 1)
            return array_chunk($n[0], 1);
        array_unshift($uarr, NULL);
        $transpose = call_user_func_array('array_map', $uarr);
        return array_map('array_filter', $transpose);
    }

    function bead_sort($uarr) {
        foreach ($uarr as $e)
            $poles []= array_fill(0, $e, 1);
        return array_map('count', columns(columns($poles)));
    }

    $array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
    $sorted = bead_sort($array);
    print_r($sorted);
    ?>
</p>
</body>
</html>


