<?php 

//count function


$cars=array("Volvo","BMW","Toyota");
echo "number of values by count Function=";
echo count($cars)."<br/><br/>";

//array_sum Function
$b=array(5,15,25,35,45);
echo "sum of array by sum function =";
echo array_sum($b)."<br/><br/>";

//array_reverse function

$c=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
echo "array reverse result=";
print_r(array_reverse($c));
echo "<br/><br/>";

//array_product
$e=array(5,5);
echo "product of array by function =";
echo(array_product($e))."<br/><br/>";

//array_rand function
$f=array("red","green","blue","yellow","brown");
echo "output by random function=<br/>";
$random_keys=array_rand($f,3);
echo $f[$random_keys[0]]."<br>";
echo $f[$random_keys[1]]."<br>";
echo $f[$random_keys[2]]."<br/><br/>";

//array_merge function
$a1=array("red","green");
$a2=array("blue","yellow");
echo "result of array_merge=";
print_r(array_merge($a1,$a2));
echo "<br><br>";

//range function
$number = range(0,5);
echo "output of range=";
print_r ($number);
echo "<br><br>";

//sort function

$carsss=array("Volvo","BMW","Toyota");
print_r( sort($carsss));
echo "<br><br>";

//array_diff function
$aa1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$aa2=array("e"=>"red","f"=>"green","g"=>"blue");
echo "output of diff. function =";
$result=array_diff($aa1,$aa2);
print_r($result);
echo "<br><br>";

//array_key_exists
$a11=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a11))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
  echo "<br><br>";

  //compact() function
  $firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");
echo "output of compact function=";
print_r($result);
echo "<br><br>";

//array_flip function
$a111=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result1=array_flip($a111);
echo "output of flip function=";
print_r($result1);
echo "<br><br>";

//in_array function()
$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "in array Match found";
  }
else
  {
  echo "Match not found";
  }
  echo "<br><br>";

  //array_unique function
  $abc=array("a"=>"red","b"=>"green","c"=>"red");
  echo"output of unique function=";
  print_r(array_unique($abc));
  echo "<br><br>";

  //array search function
  $a=array("a"=>"red","b"=>"green","c"=>"blue");
  echo "array search=";
echo array_search("red",$a);
  echo "<br><br>";

  //intersect function
  $b1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
  $b2=array("e"=>"red","f"=>"green","g"=>"blue");
  $result=array_intersect($b1,$b2); 
  echo "result of intersect function=";
  print_r($result);
  echo "<br><br>";

  //array push function
  $a12=array("red","green");
  array_push($a12,"blue","yellow");
  echo "output after push=";
  print_r($a12);
  echo "<br><br>";

  //array pop function
  $a14=array("red","green","blue");
  array_pop($a14);
  echo "output after pop=";
  print_r($a14);
  echo "<br><br>";

  //end() function
  $people = array("Peter", "Joe", "Glenn", "Cleveland");
  echo "result of end function=";
  echo current($people) . "<br>";
  echo end($people);
  echo "<br><br>";

  //shuffle() function
  $my_array = array("red","green","blue","yellow","purple");
  shuffle($my_array);
  echo "result of shuffle function=";
  print_r($my_array);
  echo "<br><br>";

  //change key() function
  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
  echo "change key output = ";
  print_r(array_change_key_case($age,CASE_UPPER));

  
?>

