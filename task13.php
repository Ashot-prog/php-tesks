
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
    13. Write a PHP script to :<br>
    a) transform a string all uppercase letters.<br>
    b) transform a string all lowercase letters.<br>
    c) make a string's first character uppercase.<br>
    d) make a string's first character of all the words uppercase.<br>


</p>
<p style="text-align: center">
    <?php

print(strtoupper("the quick brown fox jumps over the lazy dog.")).'<br>';

print(strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG")).'<br>';

print(ucfirst("the quick brown fox jumps over the lazy dog.")).'<br>';

print(ucwords("the quick brown fox jumps over the lazy dog."));
    ?>
</p>
</body>
</html>











