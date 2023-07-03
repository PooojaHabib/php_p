<body>
    <form method="post" action="">
        <label>enter the number from 1 to 3</label>
        <input type="number" name="number"><br/><br/>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
<?php
if(isset($_POST['submit']))
{
    $number=$_POST['number'];
    switch($number)
    {
        case '1':
        echo "List of animals <br/>";
        echo "1.Dog";
        break;
        case '2':
        echo "List of flowers <br/>";
        echo "1.lilly";
        break;
        case '3':
        echo "List of colors <br/>";
        echo "1.red";
        break;
       default:
       echo "invalid number";
       break;
    }
}
?>
