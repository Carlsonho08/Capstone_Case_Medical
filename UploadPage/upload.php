<?php

require 'Connection.php';

if (isset($_POST['submit'])) {

    $file = $_FILES['file'];
    $pdf = $_FILES['pdf'];
    $type = $_POST['mysets'];

    if (isset($_FILES['file'])) {

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $pdfName = $_FILES['pdf']['name'];
        $pdfTmpName = $_FILES['pdf']['tmp_name'];
        $pdfSize = $_FILES['pdf']['size'];
        $pdfError = $_FILES['pdf']['error'];
        $pdfType = $_FILES['pdf']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $pdfExt = explode('.', $pdfName);
        $pdfActualExt = strtolower(end($pdfExt));

        $acceptedFileExt = array('jpeg', 'jpg', 'png');
        $acceptedPdfExt = array('pdf');

        if (in_array($fileActualExt, $acceptedFileExt) === false) {
            echo
            "<script> alert ('The image you have chosen does not have an accepted extension, please make sure it has an extension of: jpg, jpeg, png!'); </script>"
            ;
        }

        else if (in_array($pdfActualExt, $acceptedPdfExt) === false) {
            echo
            "<script> alert ('The pdf you have chosen does not have an accepted extension, please make sure it has an extension of: pdf'); </script>"
            ;
        }

        else if ($fileSize > 10485760 ) {
            echo
            "<script> alert ('The photo you have chosen to upload is too big, make sure it is under 10MB!'); </script>"
            ;       
        }

        else if ($fileSize > 10485760 ) {
            echo
            "<script> alert ('The pdf you have chosen to upload is too big, make sure it is under 10MB!'); </script>"
            ;
        }

        else {
            $newImageName = uniqid();
            $newImageName .= '.' . $fileActualExt;

            $newPdfName = uniqid();
            $newPdfName .= '.' . $pdfActualExt;

            move_uploaded_file($fileTmpName, 'uploads/' . $newImageName);
            move_uploaded_file($pdfTmpName, 'uploads/' . $newPdfName);
            $query = "INSERT INTO useruploads VALUES('', '$type', '$newImageName','$newPdfName')";
            mysqli_query($conn, $query);
            echo
            "<script> alert ('Upload Successful!');
            document.location.href = 'confirm.php';
            </script>";
        }
    }
}