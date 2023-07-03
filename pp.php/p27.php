<?php
//implode (separator,array)
$arr=array('Hello','ToDay','is','Thursday');
echo implode(" ",$arr);
echo "<br/>";
//explode(separator,string,limit)
$string1="$1000[ $2000[ $500[ $3000[";
print_r(explode("[",$string1));
?>