<?php
if(isset($_POST["formSubmit"]) )
{
  
  $varSets = $_POST["mysets"];
 // $image = $_FILES['myfile'];
 // $blueprint = $_FILES['blueprint'];
 //setcookie('blueprint',$blueprint,time()+600);
 // setcookie("mysets", $varSets, time()+600);
 // setcookie("myfile", $image, time()+600);
  $allowed = array('jpg', 'jpeg', 'png','pdf');

  $fileName = $_FILES['myfile']['name'];
  $fileTmpName = $_FILES['myfile']['tmp_name'];
  $fileSize = $_FILES['myfile']['size'];
  $fileError = $_FILES['myfile']['error'];
  $fileType = $_FILES['myfile']['type'];
  
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  checkname($fileName,$fileTmpName,$fileSize,$fileActualExt,$allowed);

  $fileName2 = $_FILES['blueprint']['name'];
  $fileTmpName2 = $_FILES['blueprint']['tmp_name'];
  $fileSize2 = $_FILES['blueprint']['size'];
  $fileError2 = $_FILES['blueprint']['error'];
  $fileType2 = $_FILES['blueprint']['type'];

  $fileExt2 = explode('.', $fileName2);
  $fileActualExt2 = strtolower(end($fileExt2));

  checkname($fileName2,$fileTmpName2,$fileSize2,$fileActualExt2,$allowed);


// execute your Python script from PHP
//$command = escapeshellcmd('count.py');
//$command = escapeshellcmd('rgb.py');

//  if ($varSets =="BOS15CMFG"){ $output = shell_exec($command);}
// else { }

//echo $output;

// take response content to embed it into the page

//exec("python /path/to/python-script.py");
} // end of if 


else
{
  echo"file not uploaded " ;
}

function checkname($name, $temname, $size,$error,$Actual, $allow)
{
  if (in_array($Actual, $allow)) {
    if ($error === 0) {
        if ($size < 1000000){
            $fileNameNew = uniqid('true').".".$Acutal;
            $fileDestination = 'uploads/'.$fileNameNew;
            move_uploaded_file($temname, $fileDestination);
            header ("Location: uploadpage.php?uploadsuccess");
        } else {
            echo "Your file is too big!";
        }
    }else {
        echo "There was an error uploading your file!";
    }
} else {
    echo "You must upload files with jpg, jpeg, or png extension";
}
}



?>