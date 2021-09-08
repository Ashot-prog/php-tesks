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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task1.php">Task1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task2.php">Task2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task3.php">Task3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task4.php">Task4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task5.php">Task5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task6.php">Task6</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task7.php">Task7</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task8.php">Task8</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task9.php">Task9</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task10.php">Task10</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task11.php">Task11</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task12.php">Task12</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task13.php">Task13</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task14.php">Task14</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task15.php">Task15</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task16.php">Task16</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task17.php">Task17</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task18.php">Task18</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task19.php">Task19</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="task20.php">Task20</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
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







