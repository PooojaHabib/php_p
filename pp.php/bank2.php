<?php
$account1="Savings";
$account2="Current";

echo "types of account <br/>";
echo "$account1 <br/>$account2";
?>
<body>
    <form method="POST" action="">
        <input type="text" name="user_choice"
        placeholder="enter your choice"><br/><br/>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
<?php
if(isset($_POST['submit']))
{
    if($_POST['user_choice']=='Savings')
    {
        echo "Savings Account is Created";
    }
    elseif($_POST['user_choice']=='Current')
    {
        echo "Current Account is created";
    }
    else{
        echo "Please Enter one of the types of account";
    }
}
?>