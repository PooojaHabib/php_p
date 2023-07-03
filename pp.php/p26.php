<?php
/*string function*/
//1.string length
 $student ="vijay";
 echo strlen($student);
 echo"<br/>";

  //2.string count
  $institute="Keonics computer training center";
  echo $institute;
  echo"<br/>";
  echo str_word_count($institute);
  echo "<br/>";

  //3.reverse the string
  echo $student;
  echo "<br/>";
  echo strrev($student);
  echo "<br/>";
  

  //4.finding the text within the string
   $data="welcome to keonics computer traning center";
   echo $data;
   echo "<br/>";
   echo strpos($data,"computer");
   echo "<br>";
   
   //5.Replacing text within a string
   $info="I am Learning computer";echo $info;
   echo "<br/>";
   echo str_replace("computer","PHP Pragrammimg lang",$info);
   echo "<br/>";
   

   //6.Converts every first alphabet  to upper case
   echo ucwords("welcome to php");
   echo "<br/>";
   
   //7. converts whole string to upper case
echo strtoupper("welcome to php");
echo "<br/>";


//8.converts whole string to lowercase
echo strtolower ("WELCOME TO PHP");
echo "<br/>";


//9.repeating the string 
echo str_repeat("=",13);
echo "<br/>";


//10.computing strings
// this function returns:0-  if the two strings are equal
//                       <0- if string 1 is less than string 2
//                       >0= if string 1 is grater than string2
//                       ASCii value of A-65 a=97 


$string1="welcome";
$string2="WELCOME";
echo "string1  ". $string1;
echo "<br/>";
echo "string2  ". $string2;
echo "<br/>";

//11.DISPLAYIN G THE PART OF STRING
$string3="Welcome to PHP strings";
echo $string3;
echo "<br/>";
echo substr($string3,7);
echo "<br/>";
echo substr($string3,0,6);
echo "<br/>";


//12.Removing white spaces from string 
$string="web development";
echo $string;
echo "<br/>";
echo trim("$string","web");
?>
