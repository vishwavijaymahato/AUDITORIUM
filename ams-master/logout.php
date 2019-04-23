<?php
session_start();

if(session_unset())
{
header("Location: http://uttamrajak.me/auditorium/login.php");
//header("Location: http://localhost/nikvj/login.php");
}
?>