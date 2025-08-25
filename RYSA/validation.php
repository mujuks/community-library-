<?php
$nameError = "";
$passwordError = "";
if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) )
    
    {
        $nameError = 'Name is required';
    }else
    {
        $username = trim($username);
        $username = htmlspecialchars($username);
        if(preg_match("/[^A-Za-z']/", $username))
    }
{
    $nameError = "<br>Name should contain only char and space";
}
if (empty($password) )
{
    $passwordError = "Password is required";
}
else{
    if(strlen($password) < 8)
    {
}