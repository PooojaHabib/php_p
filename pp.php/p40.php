<?php
$color=array('Dastan','Honda','BMW');
foreach($color as $c)
{
    echo "$c,";

}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
    echo"<li>$y</li>";

}
echo "</ul>";
?>