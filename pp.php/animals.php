<body>
    <form method="POST" action="">
        <lable>Enter the number from 1 to 3 </lable>
        <input type="number" name="number">
        <br/><br/>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
<?php
if(isset($_POST['submit']))
{
$number=$_POST['number'];
if($number==='1')
{
    echo "list of animals<br/>";
    echo "1.Dog";
}
else if($number==='2')
{
    echo "list of flowers<br/>";
    echo "2.lotus";}

else if($number==='3')
{
    echo "list of colours<br/>";
    echo "3.red";
}
else {
    echo "invalid number";
}
}
?>