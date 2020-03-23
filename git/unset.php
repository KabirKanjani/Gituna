<?php
//connected with sessions.php used to unset a session
session_start();
unset($_SESSION['username']);//unsetting specifc session
session_destroy();//unsetting all sessions
?>
     