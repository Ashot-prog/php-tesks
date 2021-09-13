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
    4. $x = [1, 2, 3, 4, 5];<br>
    Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.<br>
    Sample Output :<br>
    array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }<br>
    array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }<br>


</p>
<p style="text-align: center">
<?php
function task4(array $array)
{
    return array_slice($array, rand(0, count($array)));
}

function task5(array $color)
{

    $firstKey = array_key_first($color);
    return $color[$firstKey];
}
print_r(task4([1,2,3,4,5]));

?>
</p>
</body>
</html>


