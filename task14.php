
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
    14. Write a PHP script to check whether a string contains a specific string?<br>
    Sample string : 'The quick brown fox jumps over the lazy dog.'


</p>
<p style="text-align: center">
    <?php
    function task14(string $str1,$str2):string
    {
        if (strpos($str1, $str2) !== false) {
            return'Word is present.';
        } else {
            return 'Word is not present.';
        }
    }
    echo task14('The quick brown fox jumps over the lazy dog.', 'fox');


    ?>
</p>
</body>
</html>











