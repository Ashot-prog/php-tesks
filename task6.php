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
    6. Write a PHP script which decodes the following JSON string.
    Sample JSON code :<br>
    {"Title": "The Cuckoos Calling",<br>
    "Author": "Robert Galbraith",<br>
    "Detail": <br>
    "Publisher": "Little Brown"
    }}<br>
    Expected Output :<br>
    Title : The Cuckoos Calling<br>
    Author : Robert Galbraith<br>
    Publisher : Little Brown<br>

</p>
<p style="text-align: center">
    <?php
    function w3rfunction($value,$key)
    {
        echo "$key : $value"."\n";
    }
    $a = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{ 
"Publisher": "Little Brown"
 }
  }';
    $j1 = json_decode($a,true);
    array_walk_recursive($j1,"w3rfunction");
    ?>
</p>
</body>
</html>







