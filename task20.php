
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
    20. Write a PHP script to remove comma(s) from the following numeric string.<br>
    Sample String : '2,543.12'<br>
    Expected Output : 2543.12<br>


</p>
<p style="text-align: center">
    <?php
    function task20(string $number): string
    {
        return str_replace( ',', '', $number);
    }
    echo task20('2,543.12');

    ?>
</p>
</body>
</html>
