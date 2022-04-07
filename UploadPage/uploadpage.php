<!DOCTYPE html>
<html>
    <head>
        <title>Upload</title>
    </head>
    <body>
        <form action = "upload.php" method = "POST" enctype = "multipart/form-data">

            <h3>Please Select the type of Case you are comparing!</h3>
            <label for = "type">Choose type of Case</label>
            <select name="mysets" id="mysets">
                <option value="flat">Flat Case</option>
                <option value="assembled">Folded/ Assembled Case</option>
            </select><br>

            <label>Please select picture</label>
            <input type = "file" name = "file"><br>

            <label>Please select pdf</label>
            <input type = "file" name = "pdf"><br>

            <button type = "submit" name = "submit">UPLOAD</button>
        </form>
    </body>
</html>