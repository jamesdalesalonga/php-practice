<!-- Hello World!

<h1>Hello World!</h1>

<style>
    h1 {
        color:blue;
    }
</style>

<script>
    alert("Hello World!")
</script> -->

<?php
   //echo "Hello World!";
   #echo "Hello World!";


    /*echo "Hello World!";
      echo "Hello World!";
    */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <h1>This is my first PHP page</h1> -->
<?php 
// echo "Hello World!";

// variable

//    $a = 5;
//    var_dump($a);

//    var_dump("John");
//    var_dump(3.14);
//    var_dump(true);
//    var_dump([1,2,3,4,5]);
//    var_dump(null);


//variable scope

// $a = 5;
// //echo $a;

// function test()
// {
// static $a = 6;   
// echo $a;
// echo "<br>";
// $a++;
// }

// // test(); //6
// // test(); //6
//  test(); //6
//  test(); //7


//echo $a;
   
//echo & print

// echo ("Hello! <br>"), ("World! <br>");
// echo "Hello! <br>", "World! <br>";
// print ("Hello! <br>");
// print "Hello! <br>";
// echo print("Hi!");

// Data Types
// $a = "John"; //String
// $b = 5; // Integer
// $c = 3.14; //float
// $d = true; //boolean
// $e = [1,2,3]; //array
// $f = new stdClass(); //object
// $g = null; //null
// $h = fopen("php_practice.php", "r"); //resource

// var_dump($a);
// echo "<br>";
// var_dump($b);
// echo "<br>";
// var_dump($c);
// echo "<br>";
// var_dump($d);
// echo "<br>";
// var_dump($e);
// echo "<br>";
// var_dump($f);
// echo "<br>";
// var_dump($g);
// echo "<br>";
// var_dump($h);
// echo "<br>";

// strings
// $a = "blue";
// $name = "<h1 style='color:$a'>John Doe";
// 

//  $name = "John Doe";

// echo strlen($name), "<br>";
// echo str_word_count($name), "<br>";
// echo strpos($name, "Doe"), "<br>";
// echo strtoupper($name), "<br>";
// echo strtolower($name), "<br>";
// echo str_replace(" Doe","Cruz",$name), "<br>";
// echo strrev($name), "<br>";
// echo trim($name), "<br>";
// echo print_r(explode("o",$name), "<br>");

// $x = "Hello";
// $y = "World!";
// echo $x ." ". $y . "<br>";
// echo "$x $y <br>";
// echo '$x $y <br>';

// $x = "Hello";
// echo substr($x, 1, 4), "<br>";
// echo substr($x, 1, ), "<br>";
// echo substr($x, -5, 2), "<br>";

// $a = "sample";
// $x = "John \"Pogi\" Doe";
// echo $x;

// $a = -1; 
// $b = 1.0;
// $c = "5";

// echo PHP_INT_MAX, "<br>";
// echo PHP_INT_MIN, "<br>";
// echo PHP_INT_SIZE, "<br>";
// echo is_int($c);

// echo PHP_FLOAT_MAX, "<br>";
// echo PHP_FLOAT_MIN, "<br>";
// echo PHP_FLOAT_DIG, "<br>";
// echo PHP_FLOAT_EPSILON, "<br>";
// echo is_float($b), "<br>";

// echo is_numeric($a);

// $a = "John"; //String
// $b = 5; // Integer
// $c = 3.14; //float
// $d = true; //boolean
// $e = [1,2,3]; //array
// $f = new stdClass(); //object
// $g = null; //null
// $h = fopen("php_practice.php", "r"); //resource

// ccasting - string 
// $a = (string) $a;
// $b = (string) $b;
// $c = (string) $c;
// $d = (string) $d;
// $e =  $e;
// $f =  $f;
// $g = (string) $g;
// $h = (string) $h;

// casting - integer
// $a = (int) $a;
// $b = (int) $b;
// $c = (int) $c;
// $d = (int) $d;
// $e = (int)$e;
// $f = $f;
// $g = (int) $g;
// $h = (int) $h;

// casting - float
// $a = (float) $a;
// $b = (float) $b;
// $c = (float) $c;
// $d = (float) $d;
// $e = (float) $e;
// $f = $f;
// $g = (float) $g;
// $h = (float) $h;

// casting - boolean
// $a = (bool) $a;
// $b = (bool) $b;
// $c = (bool) $c;
// $d = (bool) $d;
// $e = (bool) $e;
// $f = (bool)$f;
// $g = (bool) $g;
// $h = (bool) $h;

//casting-array
// $a = (array) $a;
// $b = (array) $b;
// $c = (array) $c;
// $d = (array) $d;
// $e = (array) $e;
// $f = (array)$f;
// $g = (array) $g;
// $h = (array) $h;



// var_dump($a);
// echo "<br>";
// var_dump($b);
// echo "<br>";
// var_dump($c);
// echo "<br>";
// var_dump($d);
// echo "<br>";
// var_dump($e);
// echo "<br>";
// var_dump($f);
// echo "<br>";
// var_dump($g);
// echo "<br>";
// var_dump($h);
// echo "<br>";



// php math
// $pi = pi();
// echo $pi, "<br>";

// $minNumber = min(300, 80, 4, 98, 3);
// $maxNumber = max(300, 80, 4, 98, 3);


// echo $minNumber, "<br>";
// echo $maxNumber, "<br>";

// $num = -5;
// echo abs($num), "<br>";;

// $sqrt = sqrt(9);
// echo $sqrt, "<br>";

// $rounded = round(3.49);
// echo $rounded, "<br>";

// echo rand(), "<br>";

// echo rand(5,30), "<br>";

 //php constant
//   define("_no1","hello",);
//   define("_no2",25,);
//   define("_no3",[1,2,3],);
//   echo _no1, "<br>";
//   echo _no2, "<br>";
//  //echo _no3,"<br>";

//   function test(){
   
//     echo _no1;
//   }
 
// test();
 
//php operators
//arik
  //sum
// echo 6 + 4 + 5, "<br>";
//   //sub
// echo 6 - 5 - 10,"<br>";
// echo 6 - 2 + 10,"<br>"; //PEMDAS
// //multi
// echo 6 * 6 * 6,"<br>";
// //div
// echo 10 / 5,"<br>";
// echo 6 + 6 * 2 / 2,"<br>"; //PEMDAS
// // mod
// echo 5 % 2,"<br>";
// //expon **
// echo 4 ** 2,"<br>";

//assignment
// $x = 5;
// +=
//-=
//*=
// /=
// %=
//$x = $sx + 10;
// $x += 10;
// echo $x

//comparison
// ==
// var_dump(6 == "6");
// echo "<br>";
// // ===
// var_dump(6 === "6");
// echo "<br>";
// // !=
// var_dump(100 != 99);
// echo "<br>";
// // !==
// var_dump(100 !== 99);
// echo "<br>";
// // >
// // >=
// //<=
// var_dump(10 > 4);
// echo "<br>";
// var_dump(10 >= 4);
// echo "<br>";
// var_dump(10 <= 4);
// echo "<br>";
// // <=>
// echo 10 <=>5;

// //increment
// $x = 5;
// $y = 5;
// //pre-incre
// echo ++$x,"<br>";
// //post-incre
// echo $y++,"<br>";
// echo $y,"<br>";

//logical
// and &&
// var_dump(true and true);// true
// echo "<br>";
// var_dump(true and false);// false
// echo "<br>";
// var_dump(6 == "6" and 6 > 9); // fasle
// echo "<br>";

// // or ||
// var_dump(false or false);// true
// echo "<br>";
// var_dump(6 == "6" || 6 > 9); // true
// echo "<br>";

// // xor
// var_dump(true xor false); //true
// echo "<br>";
// var_dump(6 == "6" xor 6 > 9); // true
// echo "<br>";

// // !
// var_dump(!true);
// echo "<br>";

// var_dump(!(6 == "6" xor 6 > 9)); // true
// echo "<br>";

echo "Hello ". "World!"
$x = "Hello";
$x = $x . "world";
$x . = "World"

echo $x;

?>

</body>
</html>
