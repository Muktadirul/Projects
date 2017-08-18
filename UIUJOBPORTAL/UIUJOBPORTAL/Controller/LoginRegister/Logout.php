<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: http://localhost/UIUJOBPORTAL/View/LoginRegister/LoginView.php"); // Redirecting To Home Page
}
?>