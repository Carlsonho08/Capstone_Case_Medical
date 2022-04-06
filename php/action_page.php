<?php
if(isset($_POST["formSubmit"]) )
{
  echo "Welcome " . $_COOKIE["mysets"] . "<br />";
  
  $varSets = $_POST["mysets"];
  $image = $_FILES['myfile'];
  $blueprint = $_FILES['blueprint'];
  setcookie('blueprint',$blueprint,time()+600);
  setcookie("mysets", $varSets, time()+600);
  setcookie("myfile", $image, time()+600);
echo "$image";



// execute your Python script from PHP
//$command = escapeshellcmd('count.py');
//$command = escapeshellcmd('rgb.py');

//  if ($varSets =="BOS15CMFG"){ $output = shell_exec($command);}
// else { }

//echo $output;

// take response content to embed it into the page


//exec("python /path/to/python-script.py");
}
else
{echo"file not uploaded " ;
}


?>
