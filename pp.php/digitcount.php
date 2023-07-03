<body>
    <form method ="post" action="">
        <lable>Enter the number </lable><br/><br/>
        <input type="number" name="number"><br/><br/>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
<?php
if(isset($_POST['submit'])){
    $number=$_POST['number'];
    echo "You have Entered $number.<br/>";
    if ($number<10)
    echo "it is single digit";
    else if($number>=10 and $number<100)
    echo "It is double digit";
    else if($number>=100 and $number<1000)
    echo "It is triple digit";
    else if($number>=1000 and $number<10000)
    echo "It is four digit";
    else if($number>+10000)
    echo "it is more than four digits";
}
?>
