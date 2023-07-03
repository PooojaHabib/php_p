<?php
session_start();
echo $_SESSION['username'];
echo "<br/>";
echo $_SESSION['email'];
// unset the session data 
unset($_SESSION['email']);
session_destroy();
?>