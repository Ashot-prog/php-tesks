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
    8. Write a PHP script to sort the following associative array :
        ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"] in<br>
    a) ascending order sort by value<br>
    b) ascending order sort by Key<br>
    c) descending order sorting by Value<br>
    d) descending order sorting by Key<br>





</p>
<p style="text-align: center">
   <?php
   function task8 (array $array)
   {

       sort($array);
       echo "<pre>";
       print_r($array);
       echo "</pre>";

       rsort($array);
       echo "<pre>";
       print_r($array);
       echo "</pre>";

       ksort($array);
       echo "<pre>";
       print_r($array);
       echo "</pre>";

       krsort($array);
       echo "<pre>";
       print_r($array);
       echo "</pre>";
   }
  return task8(["Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40"]);

?>
</p>
</body>
</html>




