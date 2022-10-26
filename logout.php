<?php
session_start();
require_once('LineLogin.php');

if (isset($_SESSION['profile'])) {
    $profile = $_SESSION['profile'];
    $line = new LineLogin();
    $line->revoke($profile->access_token);
    session_destroy();
}

header('location: index.php');
?>