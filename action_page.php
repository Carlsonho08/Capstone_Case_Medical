<?php
if(isset($_POST["formSubmit"]) )
{
  $varSets = $_POST["mysets"];
  $image = $_FILES['myfile'];
  setcookie("mysets", $varSets, time()+600);
  setcookie("myfile", $image, time()+600);
    $varRedirect = "results.html";
    redirect($varRedirect);


}

function redirect($url, $statusCode = 303)
{
header('location: ' .$url, true, $statusCode);
die();
}
$varRedirect = "results.html";
redirect($varRedirect);
// call to function removed but it would call redirect($varRedirect);
?>