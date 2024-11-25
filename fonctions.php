<?php
session_start();
function GenerateToken(){
    $token = uniqid();
    $_SESSION["token"] = $token;

    echo "<input type='hidden' name='token' value='$token'>";
}
function CheckToken(){
    $token=filter_input(INPUT_POST, 'token');
    if ($token!=$_SESSION["token"])
        die("Token Antiforgery non valide.");
}
