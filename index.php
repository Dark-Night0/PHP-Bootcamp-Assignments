<?php 

// [ 020 - 029 ]
// 01

// // Replace ? With Arithmetic Operators
// echo 10 & 20 & 15 & 3 & 190 & 10 & 400 ; // 0

// 02

$a = "10" ;

echo +$a; // 10
echo "\n";
echo gettype(+$a) ; // integer
echo "\n";
echo "\n";


settype($a , 'int') ; // convert Variable To Integer
echo $a ; // 10
echo "\n";
echo gettype($a) ; // Integer
echo "\n";
echo "\n";

echo (int)$a ; // 10
echo "\n";
echo gettype((int)$a); // Integer
echo "\n";
echo "\n";

echo -(-$a);
echo "\n";
echo gettype(-(-$a)) ;
echo "\n";
echo "\n";

echo (integer)$a ;
echo "\n" ;
echo gettype((integer)$a);
echo "\n" ;
echo "\n" ;

// 03
$a = 10;
$b = 20;

echo $a <=> $b ;
echo "\n\n";

$a = 10;
$b = 20;
$c = 15;

var_dump($a != $b); // True
var_dump($c > $a); // True
var_dump($a !== $b); // True
var_dump($a < $b); // True
var_dump($a <= $c); // True
var_dump($a <> $c); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype((float) $a) !== gettype($b)); // True

echo "\n\n";


// 05

$points =10 ;

++$points ;
++$points ;
++$points ;

echo $points ;

--$points ;
--$points ;
--$points ;
--$points ;
--$points ;
echo "\n";

echo $points;
echo "\n\n";



$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = $a . " " .$b . " " . $c;

// Method Two
$d = "$a $b $c";

// Method Three
$d = "{$a} {$b} {$c}";

// Method Four
$d = sprintf("%s %s %s" , $a , $b , $c);

echo $d; // Elzero Web School
echo "\n\n";

// 07
$a = 10;
$b = 20;

echo $a + $b * $a + $b + $a * $a * $a * 9.77 ; // 10000

echo "\n\n";

// 08

// Code 1
// $k = @$g or die("Custom Error") ;

// Code 2
// $f = @file("Not_A_File") or die ("Custom Error");

// Code 3
// (@include("Not_A_File")) or die("Custom Error");

// [ 030 - 036 ]

// 01

$a = 100;
$b = 200;
$c = 100;

if ($b > $a and $a == $c and ($a + $c) == $b)
    echo "Yes" ;

echo "\n\n";
// 02

$a = 200;
$b = 200;
$c = 100;

if ($a > $b)
    echo "A Is Larger Than B \n";

else if ($a > $c )
    echo "A Is Larger Than C \n";

else if ($a < $b or $a < $c)
    echo "A Is Not Larger Than B Or C \n" ;

echo "\n\n";

// 03

$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    if ($_POST["user"] === $admins[0])
        echo "This Username $admins[0] is Admin";

    else if ($_POST["user"] === $admins [1])
        echo "This Username $admins[1] is Admin";

    else if ($_POST["user"] === $admins[2])
        echo "This Username $admins[2] is Admin";
}
// HTML Code
// <form action="" method="POST">
//   <input type="text" name="user">
//   <input type="submit" value="Send">
// </form>

// 04

$a = 30;
$b = 20;
$c = 10;

// echo (($a + $b) === $c) ? "A + B = C" :
// (($a + $c) === $b) ? "A + C = B" :
// (($b + $c) === $a) ? "B + C = A" :
// "The End";

echo "\n\n";

// 05

$name = "Osama";
$age = 40 ;
$country = "Egypt";

 // if Condition 
if ($age > 18) {echo "The Age Is Good To Go \n";if (gettype($name) === "string"){echo "The Name Is Good To Go \n" ;if ($country === "Egypt"){echo "The Country is Good To Go \n" ;}}}

// short if (Ternary operator)
echo ($age  > 18) ? ( (gettype($name) === "string") ? ($country === "Egypt" ?"The Age Is Good To Go\nThe Name Is Good To Go \nThe Country Is Good To Go\n" 
: "The Age Is Good To Go\nThe Name Is Good To Go \n") 
: "The Age Is Good To Go\n")
: false;

echo "\n\n" ;
echo "\n\n";
// 06

$genre = "Hack And Slash";

switch ($genre):

case "RPG":
    echo "I Recommend Ys Games ";
    break;
case "Hack And Slash":
    echo "I Recommend Castlevania Games" ;
    break ;
case "FPS" :
    echo "I Recommend Uncharted Games" ;
    break ;
case "Platform" :
    echo "I Recommend Megaman Games";
    break ;
case "Puzzle" :
    echo "I Recommend Megaman Games";
    break ;
default :
echo "I Recommend Shadow Of Mordor And Shadow Of War";

endswitch ;


echo "\n\n";

// 07

$num_one = 23 ;
$num_two = 5 ;
$op = '/' ;


   switch ($op) :

    case '+' :
        echo "$num_one + $num_two = " . ($num_one + $num_two) ;
        break ;
    
    case '-' :
        echo "$num_one - $num_two = " . ($num_one - $num_two) ;
        break ;

    case '*' :
        echo "$num_one * $num_two = " . ($num_one * $num_two) ;
        break ;
        
    case '/':
        echo "$num_one / $num_two = " . (int)($num_one / $num_two) . "\n" ;
        echo "$num_one % $num_two = " . ($num_one % $num_two) . "\n" ;
        
        break ;

    default :
    echo "Unknown Operator \n";

endswitch ;

// 08


$day = "Tun" ;

if ($day === "Sat" or $day === "Sun" or $day === "Mon")
    echo "We Are Open All The Day \n";

else if ($day === "Tun" or $day === "Wed")
    echo "We Are Open From 08:12";
    
else if ($day === "Tun" or $day === "Fir")
    echo "We Are Closed " ;
else 
    echo "Unknown Day";

echo "\n\n";

// [ 037 - 042 ]

// 01
$index = 10 ;

for (; $index >= 1 ; $index -- )
    echo "$index\n";


echo "\n###########\n";


// 02
$index = 0 ;

for (; $index <= 20 ; $index+=2)
    echo "$index \n";

    
    echo "\n\n" ;
// 03
$num = 2 ;

while ($num < 520){
    
    if ($num == 2 ):
        echo $num - 1 . "\n";
        $num *= 2 ; 
        continue ;
    endif;
    
    echo $num  .  "\n";
    $num *= 2 ;
    $num += 2 ;
    
}

echo "\n\n";
// 04
$start = 10;
$end = 0;
$stop = 3;

for ($temp = $start; $temp > $end ; $temp --):

    echo ($temp >= $start ) ? "$temp \n" : ($temp >= $stop ? "0$temp\n": null);

endfor ;

// 05
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

echo "\n\n" ;

for  ($start+=1; $start < sizeof($mix) ; $start ++){

    echo (gettype($mix[$start]) ==="integer") ? $mix[$start] . "\n" : null ;
}

echo "\n\n" ;


// 06
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach ($money as $name => $pound) {

    echo "The Names Is $name And I Need $pound From Him \n\n" ;

}

echo "\n\n" ;

// 07

$mix = [1, 2, "A", "B", "C", "D", 4];
$count_str  = 0 ;
$count_num = 0 ;

foreach ($mix as $value) {

    if (gettype($value) === "string"){
        
        $count_str ++ ;
        continue ;
    }
    $count_num ++ ;
    echo $value  . " \n";
}
echo "\n" ;
echo "$count_num Numbers Printed \n" ;
echo "$count_str Letters Ignored \n" ;

echo "\n\n\n" ;

// 08
$nums = [1, 13, 12, 20, 51, 17, 30];

foreach ($nums as $value ):
    echo ($value % 2 === 0) ? $value / 2  . "\n": null ;
endforeach ;


// 09
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"] ;

for ($value = --$nums[$help_num] ; $value < sizeof($names) ; $value ++) :

    // echo ($names[$value] === "Sayed") ? $names[$value] . "\n" : ($names [$value] === "Osama") ? $names[$value] . "\n": null ;

endfor ;

echo "\n\n" ;
// 010

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

$help_num = sizeof($nums) ;

foreach ($nums as $value) :

    --$help_num ;    
    echo "$value + $nums[$help_num] = " . ($value + $nums[$help_num]) . "\n" ;
    
endforeach ;


// [ 043 - 052 ]

// 01

function greething ($name , $gender = "Unknown") {

    if ($gender === "Male")
        return "Hello Mr $name" ;
    
    else if ($gender === "Female")
        return "Hello Miss $name" ;
    
    else 
        return "Hello $name";
    
    // return ($gender === "Male") ? "Hello Mr $name" :
    // ($gender === "Female" ) ? "Hello Miss $name" :
    // "Hello $name" ;
}
echo "\n" ;

echo greething("Osama" , "Male") ; // Hello Mr Osama

echo "\n" ;

echo greething("Eman", "Female") ; // Hello Miss Eman

echo "\n" ;

echo greething("Sameh") ; // Hello Sameh

echo "\n\n" ;

// 02
function get_argument(...$names) {
    $resutl ='' ;
    foreach ($names as $name):
        $resutl .= $name  ;
        $resutl .= " " ;
    endforeach ;
    return $resutl ;
}

function get_argument2(){

    $result = '';
    for ($i = 0 ; $i < func_num_args() ; $i++):
        $result .= func_get_arg($i) ;
        $result .= " " ;
    endfor;
    return $result ;
}

echo get_argument("Hello" , "Elzero" , "Web" , "School") ;

echo "\n\n" ;

echo get_argument2("I" , "Love" , "PHP") ;

echo "\n\n";
// 03 

function sum_all (...$numbers) {
    
    $result = 0;
    foreach($numbers as $num):
    
    if ($num === 5)
        continue ;
    else if ($num === 10)
        $result += 20 ;
    else 
        $result += $num ;
    
    endforeach ;
    
    return $result ;
}

echo sum_all(10 , 12 , 5 , 6 ,6 ,10) ; // 64

echo "\n\n" ;

echo sum_all(5, 10, 5 , 10 )  ;

echo "\n\n" ;

// 04
function multiply(...$numbers) {
    
    $result = 1 ;
    
    foreach ($numbers as $num):
    
    if (gettype($num) === "string")
        continue ;
    
    else if (gettype($num) === "integer")
        $result *= $num ;
    else if (gettype($num) === "double")
        $result *= (int)$num ;
    
    endforeach ;
    
    return $result ;
}

echo "\n";
echo multiply(10, 20); // 200

echo "\n";
echo multiply("A", 10, 30); // 300

echo "\n";
echo multiply(100.5, 10, "B"); // 1000

echo "\n";

// 05

function check_status ($a , $b , $c){

    $arr = func_get_args() ;
    
    foreach ($arr as $value) :
    
        if (gettype($value) === "string")
            $name = $value ;
        else if (gettype($value) === "integer" or gettype ($value) === "double")
            $age = (int)$value;
        else if (gettype ($value) === "boolean") 
            $available = $value;
    endforeach;
    
    return ($available)? "Hello $name , Your Age is " . (int)$age . " Are You Available For Hire " :
    "Hello $name , Your Age is " . (int)$age . " Are You Not Available For Hire " ;
}


echo "\n";
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "\n";
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "\n";
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "\n";
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
echo "\n";

// 06 

function calculate($num1 , $num2 , $op ="add") {

    switch ($op) {
    
    case 'a' :
    case 'add':
    return $num1 + $num2 ;
    
    case 's':
    case 'subtract':
    return $num1 - $num2 ;
    
    case 'm':
    case 'multiply':
    return $num1 * $num2 ;
    
    default :
        return "This Process Does Not Exist" ;
    
    }


}

echo "\n\n";
echo calculate(10, 20); // 30
echo "\n";
echo calculate(10, 20, "a"); // 30
echo "\n";
echo calculate(10, 20, "s"); // -10
echo "\n";
echo calculate(10, 20, "subtract"); // -10
echo "\n";
echo calculate(10, 20, "multiply"); // 200
echo "\n";
echo calculate(10, 20, "m"); // 200
echo "\n";
echo calculate(10 ,20 ,'d') ; //This Process Does Not Exist
echo "\n\n\n";

// 07

function calculate2(int $num_one,int  $num_two): float{
        return $num_one + $num_two;
    }

    echo calculate2(20, 10); // 30
    echo "\n" ;
    echo gettype(calculate2(20, 10)); // Double

echo "\n\n" ;

// 08

$message = "Hello";

// Write Your Code Here

$$message = fn($name) => "$message $name" ;

echo $Hello("Osama"); // Hello Osama

echo "\n\n" ;

// [ 053 - 062 ]

// 01
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Write Your Code Here
$str = str_replace([$str[$num_one] , $str[(int)$num_two]] , [$let_one , $let_two] , $str) ;

echo $str; // Elzero
echo "\n" ;

// 02
$str = "Orezle";

$str = strtolower(strrev($str)) ;
$str[0] = strtoupper($str[0]) ;
echo $str ;  // Elzero

echo "\n" ;

// 03
$str = 'aAa';
$num = 3;
$char = "_";

echo str_repeat(substr_replace($str , strtolower($str) , -$num) . $char, $num );  // aaa_aaa_aaa_
echo "\n";

// 04
$str = "<div><b>Elzero</b></div>";

echo strip_tags($str , "<b>"); // <b>Elzero</b>
echo "\n";

// 05

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str , $e , $four) . "\n" ; // 1

echo substr_count($str , strtolower($o) , -$four) . "\n" ; // 2

echo "\n\n" ;

// 06
$chars = ["E", "l", "z", "e", "r", "o"];

echo implode("" , $chars) . "\n" ; // Elzero

// 07

$chars = ["e", 1, 2, "l", "z", "E", "R", "o"];

$char = '' ;
foreach($chars as $value => $index) :
    
    if ($index === 0)
        $char .= gettype($value) === "string" ? strtoupper($value) : "" ;
        continue ;
    
    $char .= gettype($value) === "string" ? strtolower($value) : "" ;
    
endforeach;

echo $char ;  // Elzero

// [ 063 - 072 ]
// 01

$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
    ];
    print_r(array_chunk(array_change_key_case($friends) , 2 , true));

// 02

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

print_r(array_combine(array_keys(array_change_key_case(array_flip($codes))),$means));

// 03

$friends = [
        "Ahmed Gamal" => "AG",
        "Osama Mohamed" => "OM",
        "Mahmoud Gamal" => "MG",
        "Ahmed Samy" => "AS"
    ];

    print_r(array_reverse(array_change_key_case(array_flip($friends)))) ;

// 04

$nums = [10, 20, 30];

echo array_reduce( $nums , fn($n1 , $n2) => $n1 + $n2 ) . "\n" ;

function add($n1 , $n2) {

    return $n1 + $n2;
}

echo array_reduce($nums , "add") . "\n";

// 05
$nums = [5, 10, 20, 5, 30, 40];

echo array_reduce( array_filter( $nums , fn($n) => $n !== 5 ), fn($n1 , $n2) => $n1 + $n2 ) . "\n";

// 06
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

print_r(array_pad($chars , count($chars) * strlen($char), $char[$zero]));

// 07
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
next($names) ;
// Write Line Here
next($names) ;

echo current($names) . "\n"; // "Sayed"

// Write Line Here
end($names);

echo current($names) . "\n"; // "Ali"

// Write Line Here
reset($names);

echo current($names) . "\n"; // "Osama"

// Write Line Here
end($names);

// Write Line Here
prev($names);

echo current($names) . "\n\n"; // "Mahmoud"

// 08
$chars = ["A", "B", "C"];

// array_push($chars , "D") ; // 1

// print_r(array_merge($chars , ["D"])); // 2

// array_unshift($chars , "D");
// sort($chars); // 3

array_splice($chars , 3 , 1 , "D"); // 4

print_r($chars);

// 09
$nums = [1, 2, 3, 4, 5, 6];

print_r(array_slice($nums , -5 , -2));

// 10
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here
array_splice($mix , 3 , -3 , $nums );
print_r($mix);


// 11
$arr = ["A", "B", "C", "D", "E"];

function length (array $Array){

    $count= 0;
    foreach($Array as $value)
        $count++ ;
    

    return $count ;
}
    echo length($arr) . "\n"; // 5

// 12
$nums = [11, 2, 10, 7, 20, 50];

function sum(array $Arr) {
    $sum = 0 ;
    foreach($Arr as $value){
        $sum += $value ;
    }
    return $sum ;
}

echo sum($nums) . "\n"; // 100

// 13
$nums = [10, 100, -20, 50, 30];

function maximum(array $Array) {

    $temp = $Array[0];
    foreach($Array as $value){
            
        if ($temp > $value)
                continue;
            
            else 
                $temp = $value ;
            
        }
    return $temp ;
}
echo maximum($nums); // 100

echo "\n";

// 14
function minimum(array $Array) {

    $temp = $Array[0];
    foreach ($Array as $value){
            
        if ($temp < $value)
                continue;
            
            else 
                $temp = $value ;
            
        }
    return $temp ;
}

echo minimum($nums) . "\n"; // -20

// 15
$chars = ["o", "r", "e", "z", "l", "E"];
$solve = '';

for($i = length($chars) - true ; $i >= 0 ; $i--){

    $solve .= $chars[$i];
}

echo $solve . "\n"; // Elzero

// 16
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$solve = [];

foreach ($mix as $value){

    if (gettype($value) === "string")
        continue;
    
    else 
        if (! ($value % 2 == 0))
            array_push($solve , $value);
}

sort($solve);
print_r($solve) . "\n" ;

// 17
$nums = [1, 2, 3, 4, 5, 6];
$solve = [];

foreach($nums as $value):

    $index = array_rand($nums);
    array_push($solve , $nums[$index]);
    unset($nums[$index]);

endforeach ;
print_r($solve);


// 18
$title = "E&z\$r0 W\$b Sch00&";

echo str_replace(["&" , "0" , "$" ] , ["l" ,"o" , "e"] ,$title  ,$count ) . "\n";
echo $count . "\n" ;


// [ 073 - 081 ]
// 01

echo rand(11 ,19) . "\n";

// 02
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo $friends[array_rand($friends)] . "\n";

// 03

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1 , 0 , PHP_ROUND_HALF_DOWN) . "\n";
echo round($num2 , 1) . "\n";
echo round($num3 , 0 , PHP_ROUND_HALF_DOWN) . "\n";

// 04
$list =[];
foreach(filter_list() as $value){
    $list[filter_id($value)] = $value;
}

print_r($list);

// 05
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1 ,FILTER_VALIDATE_URL , FILTER_NULL_ON_FAILURE ) == null ? "Not A Valid URL" :'' ;
echo "\n";

echo filter_var($url2 ,FILTER_VALIDATE_URL , FILTER_NULL_ON_FAILURE ) == null ? "Not A Valid URL" :'' ;
echo "\n";

echo filter_var($url3 ,FILTER_VALIDATE_URL , FILTER_NULL_ON_FAILURE ) == null ? '': "A Valid URL";
echo "\n";

echo filter_var($url4 ,FILTER_VALIDATE_URL , FILTER_NULL_ON_FAILURE ) == null ? "Not A Valid URL" :'' ;
echo "\n\n";

// 06
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1 , FILTER_SANITIZE_URL)  . "\n" ; 

echo filter_var($url2 , FILTER_SANITIZE_URL)  . "\n" ; 

echo filter_var($url3 , FILTER_SANITIZE_URL)  . "\n" ; 

echo filter_var($url4 , FILTER_SANITIZE_URL)  . "\n" ; 

// [ 082 - 091 ]
// 01

// In My Case i I Am Using Linux
echo round(diskfreespace("/") / 1024 ** 4 , 2) . " Terabyte \n";

echo round(diskfreespace("/home") / 1024 ** 4 , 2) . " Terabyte \n";

echo round(diskfreespace("/dev") / 1024 ** 4 , 2) . " Terabyte \n";

// I Think I Your Case , If U Using Windows Cancel Selected Comment in down 
// echo round(diskfreespace("C:") / 1024 ** 4 , 2) . " Terabyte \n";

// echo round(diskfreespace("D:") / 1024 ** 4 , 2) . " Terabyte \n";

// 02
$path = "/home/dark/Videos/LearnPHP8InArabic2022-#082-FileSystemFunctionParOne4Functions.mp4";

if (file_exists($path) ){

    echo  "Size In Megabyte Is " . round(filesize($path) / 1024 ** 2 ) . "\n";

    echo  "Size In Kilobyte Is " . round(filesize($path) / 1024 ) . "\n";
}
else 
    echo "Not Found Path";

// 03
$path = "Programmer/PHP";
$temp = $path[-1] === '/' ? rtrim($path , '/')  : $path ;

mkdir($path , 0711 , true);

foreach (array_reverse(explode('/' , $temp)) as $dir){

    if(file_exists($temp)){
        
        $temp = rtrim($temp , '/');
        rmdir($temp);
        echo "Directory $temp Removed" . "\n";
        
        $temp = str_replace("$dir" , '' , $temp);   
    }
    
}

// 04
function change_permissions(string $file){

    if (file_exists($file)){

        if (is_dir($file)){
            echo "This Is Directory And Only Files Allowed \n";
            
        }
        else{
        
            if (pathinfo($file , PATHINFO_EXTENSION) === 'txt'){
                chmod ($file , 0700);
                echo "Permissions Changed \n";

                // Display The File Permission
                clearstatcache();
                echo "The File Permission " . substr(decoct(fileperms($file)) , 2, 4) . "\n";
            
            }else 
                echo "File Extension Is Not Txt \n";
        }
    }else
        echo "Error Path !";
}

echo change_permissions("/php/Functions") . "\n" ;     // This Is Directory And Only Files Allowed
echo change_permissions("/php/Functions.php") . "\n" ; // File Extension Is Not Txt
echo change_permissions("/php/Functions.txt") . "\n" ; // Permissions Changed

// 05
echo basename("index.php") . "\n"; // index.php
echo pathinfo("index.php" , PATHINFO_FILENAME) . "." . pathinfo("index.php" , PATHINFO_EXTENSION) . "\n" ; // index.php
echo implode( "",glob("index.php")); // index.php
echo implode(array_filter(explode("/" , __FILE__) , fn($file) => $file == "index.php")); // index.php

// 06

// 1
foreach(file("php/elzero.txt" , FILE_IGNORE_NEW_LINES) as $key => $word){

    if ($key == count(file("php/elzero.txt")) -1)
        break;
    
    echo "$word "; // Hello Elzero Web School

}echo "\n";

// 2
$st = file("php/elzero.txt");
array_pop($st);
echo str_replace("\n" , ' ' , implode('', $st)) . "\n"; //  Hello Elzero Web School

// 3 , 4
$handle = fopen("php/elzero.txt" , 'r' ) ;

    // 3
    $str = fgets($handle)  . fgets($handle)  ;
    echo str_replace("\n" , " " ,$str) . "\n";
    
    rewind($handle);
    // 4
    echo rtrim(fgets($handle) , "\n") . " " . fgets($handle);

fclose($handle);

// 07
$str = file_get_contents("php/elzer2.txt");

file_put_contents("php/elzer2.txt" , str_replace("Osamaa" , "Elzero" , $str));

// [ 092 - 097 ]

// 01
date_default_timezone_set("Asia/Riyadh");

echo date_default_timezone_get() ."\n" ; // Asia/Riyadh

$date = date_create();

echo date_format($date , "D, j M y - h:i:s A") ."\n" ;
echo date_format($date ,"l, j F Y - h:i:s A") ."\n" ;

// 02
$date = "2005-10-02";

date_default_timezone_set("Africa/Cairo");

echo date_default_timezone_get() . "\n";
$d = date_create($date);
date_modify($d ,"+15 hours +15 minute +15 second") ;

echo date_format($d , "Y, F l dS H:i:s") . "\n";

// 03
$date = "1990-10-01";
$old_date= "1970-10-01";
date_default_timezone_set("Africa/Cairo");

echo "From Epoch Time Till 1990-10-01 Is Approximately " 
. +(explode("-" , $date)[0] - explode("-" , $old_date)[0]) * 365 ." Days" . "\n";

echo "From Epoch Time Till 1990-10-01 Is Approximately " 
.+(explode("-" , $date)[0] - explode("-" , $old_date)[0]) ." Years" . "\n" ;

// 04
$date = "1990-10-01";
$old_date= "1970-10-01";
$d1 = date_create($date) ;
$d2 = date_create($old_date) ;

echo "From Epoch Time Till 1990-10-01 Is Approximately " . date_diff($d1 , $d2)->days ." Days" . "\n" ;

echo "From Epoch Time Till 1990-10-01 Is Approximately " .
date_diff($d1 , $d2)->y  ." Years" . "\n";

// 05

echo time() ."\n" ;
echo date(time()) ."\n" ;
print_r(getdate()[0]) ."\n" ;


// [ 098 - 105 ]

// 01
setcookie("site[layout]" ,"boxed" , strtotime("+2 months +2 hours")) ;

setcookie("site[font]" ,"Swat" , strtotime("+2 months +2 hours")) ;

setcookie("site[color]" ,"blue" , strtotime("+2 months +2 hours")) ;

// 02
print_r($_COOKIE);

echo "Your Color is " . $_COOKIE["site"]["color"] . "And Your Font Is ". $_COOKIE["site"]["font"] . "\n" ;

// 03
setcookie("site[layout]" ,"boxed" , 1) ; // Expired or Delete Cookies

// 04
setcookie("site[font]" ,"Swat") ; // Edit Cookies And Converting To Session

setcookie("site[color]" ,"blue") ; // Edit Cookies And Converting To Session

?>


