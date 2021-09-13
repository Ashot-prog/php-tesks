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
    12. Write a PHP function to change the following array's all values to upper or lower case.<br>
    Sample arrays :
    $Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];<br>
    Expected Output :
    Values are in lower case.<br>
    Array ( [A] => blue [B] => green [c] => red )<br>
    Values are in upper case.<br>
    Array ( [A] => BLUE [B] => GREEN [c] => RED )<br>

</p>
<p style="text-align: center">
    <?php
    function array_change_value_case($input, $ucase)
    {
        $case = $ucase;
        $narray = array();
        if (!is_array($input))
        {
            return $narray;
        }
        foreach ($input as $key => $value)
        {   echo '<br>';
            if (is_array($value))
            {
                $narray[$key] = array_change_value_case($value, $case);
                continue;
            }
            $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
        }
        return $narray;
    }
    $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    echo 'Actual array ';
    print_r($Color);
    echo 'Values are in lower case.';
    $myColor = array_change_value_case($Color,CASE_LOWER);
    print_r($myColor);
    echo 'Values are in upper case.';
    $myColor = array_change_value_case($Color,CASE_UPPER);
    print_r($myColor);
    ?>
</p>
</body>
</html>







