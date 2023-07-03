<?php
function
armstrong_number($num)
{
    $originalNum=$num;
    $sum=0;
    $sl=strlen((string)$num);

   while ($num>0)
   {
    $digit=$num %10;
    $sum+=pow($digit,$sl);
    $num=(int)($num/10);
   }
    if($originalNum==$sum)
    {
        return"True";
    }
    else{
        return"false";
    }
}
echo "is 371 armstrong number?".armstrong_number(371);
echo "<br>Is 21 armstrong number?".armstrong_number(8208);
echo "<br>Is 4487 armstrong number?".armstrong_number(10);
?>