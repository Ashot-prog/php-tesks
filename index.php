<?php
//                  1
//$color = ['white', 'green','red','blue','black'];
//echo 'The memory of that scene for me is like a frame of film forever frozen at
//    that moment: the'. $color[2] .' carpet, the'.$color[1].' lawn, the'. $color[0].' house, the leade sky.
//    The new president and his first lady. - Richard M. Nixon <br><br>';
//
//                  2
//$colors = ['white', 'green','red'];
//for ($i=0; $i<3;$i++){
////    echo $colors[$i];
//echo $colors[$i].' ';
//}
//echo '<br> <br>';
//                          3
//
//$ceu = [ "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"] ;
//foreach ($ceu as $capital=>$name){
//    echo 'The capital of'.' '. $capital.' '.'is'.' '.$name.'<br><br>';
//}

//                          4
//$array = [1,2,3,4,5];
//$diff= array_diff($array, array(3,5));
//print_r($diff);


//                          5
//$color = [4 => 'white', 6 => 'green', 11=> 'red'];
//echo reset($color);

//                     6



//                      7
//$number = [1,2,3,4,5,];
//array_splice($number, 3,0,'$');
//print_r($number);
//                      8

//$array=["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
//sort($array);
//echo "<pre>";
//print_r($array);
//echo "</pre><br><br>";
//
//rsort($array);
//echo "<pre>";
//print_r($array);
//echo "</pre><br><br>";
//
//ksort($array);
//echo "<pre>";
//print_r($array);
//echo "</pre><br><br>";
//
//krsort($array);
//echo "<pre>";
//print_r($array);
//echo "</pre>";

//                                9
//$array = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
//];
//sort($array);
//for ($i=0;$i<5;$i++){
//    echo $array[$i];
//}
//echo "<br><br>";
//
//rsort($array);
//for ($i=0;$i<5;$i++){
//    echo $array[$i];
//}
//echo "<br><br>";
//
//$g=0;
//for($i=0;$i<count($array);$i++){
//    $g = $g + $array[$i];
//
//}
//echo $g/count($array);
//                                  10
//$array = [5,3,1,3,8,7,4,1,1,3];
//rsort($array);
//var_dump($array);
//                      11
//$array1 = [array(77, 87), array(23, 45)];
//$array2 = ["w3resource", "com"];
//function merge($a,$b)
//{
//    $array = []; $array = $a; if(is_scalar($b)){
//        $array = $b;
//    }
//    else{
//        {
//            foreach ($b as $k=>$v)
//            {
//                $array[]=$v;
//            }
//        }
//    }return $array;
//}echo'<pre>'; print_r(array_map('merge',$array1,$array2));,
//                                                  13

$string =  'The quick brown fox jumps over the lazy dog.';
if (strpos($string,"quick")!== false)
{
    echo 'true';
}