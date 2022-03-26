<?php
if(isset($_POST["formSubmit"]) )
{
  $varSets = $_POST["mysets"];
  $image = $_FILES['myfile'];
  $blueprint = $_FILES['blueprint'];
  setcookie('blueprint',$blueprint,time()+600);
  setcookie("mysets", $varSets, time()+600);
  setcookie("myfile", $image, time()+600);
    $varRedirect = "results.html";
    redirect($varRedirect);


}

?>