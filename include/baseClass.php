<?php
class NewClass{
    public function task1(array $color){
        echo '<p style="text-align: center">The memory of that scene for me is like a frame of film forever frozen at
        that moment:<br> the'. $color[2] .' carpet, the'.$color[1].' lawn, the'. $color[0].' house, the leade sky.
        The new president and his first lady. - Richard M. Nixon</p> <br><br>';
    }


    function task2 (array $colors)
    {
        for ($i = 0; $i < count($colors); $i++) {
            echo '<p style="text-align: center">' . $colors[$i] . '</p> ';
        }
    }


    function task3(array $ceu)
    {
        asort($ceu);
        foreach ($ceu as $capital => $name) {
            echo 'The capital of' . ' ' . $capital . ' ' . 'is' . ' ' . $name . ', <br>';
        }
    }

    function task4(array $array)
    {
        return array_slice($array, rand(0, count($array)));
    }

    function task5(array $color)
    {

        $firstKey = array_key_first($color);
        return $color[$firstKey];
    }


    function task7(array $number)
    {
        array_splice($number, rand(0, count($number)), 0, '$');
        return $number;
    }


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




    function task9(array $array)
    {

        sort($array);
        for ($i = 0; $i < 5; $i++) {
            echo $array[$i];
        }
        echo "<br><br>";

        rsort($array);
        for ($i = 0; $i < 5; $i++) {
            echo $array[$i];
        }
        echo "<br><br>";

        $g = 0;
        for ($i = 0; $i < count($array); $i++) {
            $g = $g + $array[$i];
        }

        echo $g / count($array);
    }

//    function task10(array $array)
//    {
//        rsort($array);
//        print_r($array);
//    }

    function task13(string $str):string
    {
        print(strtoupper($str)) . '<br>';
        print(strtolower($str)) . '<br>';
        print(ucfirst($str)) . '<br>';
        return (ucwords($str));
    }


    function task14(string $str1,$str2):string
    {
        if (strpos($str1, $str2) !== false) {
            return'Word is present.';
        } else {
            return 'Word is not present.';
        }
    }

    function task15(string $path):string{
        return substr(strrchr($path, "/"), 1);
    }

    function task16(string $mail) : string{
        return strstr($mail, '@', true);
    }


    function task17(string $str) : string {
        return substr($str, -3);
    }

    function task18(string $str) : string{

        return preg_replace('/the/', 'That', $str, 1);
    }



    function task19(string $string1, string $string2): string
    {
        $string='';

        if (strlen($string1) !== strlen($string2)) {
            return 'No valid strings';
        }

        for ($i = 0; $i < strlen($string1); $i++) {
            $flag = true;
            for ($j = 0; $j < strlen($string2); $j++) {
                if($string1[$i] == $string2[$j]) {
                    $flag = false;

                    break;
                }
            }

            if ($flag) {
                $string = $i. ':'.' '.'"'. $string1[$i].' '.'"'.'vs'.'"'.' '.$string2[$i].'"';
                break;

            }
        }

        return $string;

    }




    function task20(string $number): string
    {
        return str_replace( ',', '', $number);
    }








}
