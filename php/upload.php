<!DOCTYPE html>
<html>
<body>

<h1>Follow the steps to upload your image for comparsion</h1>
<p>Select your from the following list</p>
<form action="/action_page.php" method = "POST" enctype = "multipart/form-data"></form>
  <label for="sets">Choose type of case:</label>
  <select name="mysets" id="mysets">
    <option value="BOS15CMFG">BOS15CMFG</option>
    <option value="BSKF06">BSKF06</option>
    <option value="MED34T">MED34T</option>
  </select>


<h3>Show a file-select field which allows only one file to be chosen:</h3>
  <label for="myfile">Upload Image taken:</label>
  <input type="file" id="myfile" name="myfile"><br><br>



    <label for="blueprint">Upload Case PDF:</label>
    <input type="file" id="blueprint" name="blueprint"><br><br>



    <a href='action_page.php'>
      <button type="button" name="formSubmit" value="submit">Submit</button>
    </a>
</form>

</body>
</html>
