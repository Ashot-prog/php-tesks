
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
    11. Write a PHP program to merge (by index) the following two arrays.
    Sample arrays :<br>
    $array1 = [array[77, 87], [23, 45]];<br>
    $array2 = ["w3resource", "com"];<br>

</p>
<p style="text-align: center">
    <?php
    $array1 = array(array(77, 87), array(23, 45));
    $array2 = array("w3resource", "com");
    function merge_arrays_by_index($a, $b)
    {
        $arr = array(); $arr[] = $a; if(is_scalar($b))
    {
        $arr[] = $b;
    }
    else
    {
        foreach($b as $k => $v)
        {
            $arr[] = $v;
        }
    }
        return $arr;
    }
    echo '<pre>'; print_r(array_map('merge_arrays_by_index',$array2, $array1));
    ?>


</p>
</body>
</html>





































<?php
$array1 = [array(77, 87), array(23, 45)];
$array2 = ["w3resource", "com"];
function merge($a,$b)
{
    $array = []; $array = $a; if(is_scalar($b)){
    $array = $b;
}
else{
    {
        foreach ($b as $k=>$v)
        {
            $array[]=$v;
        }
    }
}return $array;
}echo'<pre>'; print_r(array_map('merge',$array1,$array2));