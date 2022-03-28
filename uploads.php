<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

#create variables for each piece of data we recive when uploading a file

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

#check file extension to make sure user is uploading the right file
    #first expload name of the file to seperate into an array
    #then convert extension to lowercase

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    #sets the allowed file types

    $allowed = array('jpg', 'jpeg', 'png');

    #checks file size, if its unique, if it is the right file extension, any errors found, sets file destination, redirects to uploads.php?upload success

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000){
                $fileNameNew = uniqid('true').".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
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