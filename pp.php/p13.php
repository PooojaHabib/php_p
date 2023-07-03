<body>
    <form method="POST" action="">
        <label>User name</label>
        <input type ="text" name="Username" placeholder="enter user name"
        required="required"><br/><br/>
        <label>Password</label>
        <input type ="password" name="Password" placeholder="enter user password"><br/><br/>
        <input type ="Submit" name="submit" value="login">
    </form>
</body>
<?php
if(isset($_POST['submit']))
{
    $username=$_POST['Username'];
    $password=$_POST['Password'];
    if($username==='vijay' and $password==='1234')
    {
        echo"Login Succesfull";
    }
    else{
        echo "Please check the username and password";
    }
}