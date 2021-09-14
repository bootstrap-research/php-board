<?php

$UserId = $email = $password = $confirmpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $UserId = test_input($_POST["UserId"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $confirmpassword = test_input($_POST["Confirmpasssword"]);
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>