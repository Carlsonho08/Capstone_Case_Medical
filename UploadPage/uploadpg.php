<<!DOCTYPE html>
<html>
    <head>
        <title>CaseVision | Upload</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

            body, html {
            height: 100%;
            line-height: 1.8;
            }

            .button {
                width: 100%;
                padding: 16px 32px;
            }

            .w3-bar .w3-button {
            padding: 16px;
            }

        </style>
    </head>
<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-blue-grey w3-card" id="myNavbar">
            <a href="#home" class="w3-bar-item w3-button w3-wide">CASEVISION</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="index.php" class="w3-bar-item w3-button">ABOUT</a>
                <a href="https://www.casemed.com/index.php" class="w3-bar-item w3-button"><i class="fa fa-desktop"></i> WEBSITE</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()"><i class="fa fa-bars"></i></a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
        <a href="https://www.casemed.com/index.php" onclick="w3_close()" class="w3-bar-item w3-button">WEBSITE</a>>
    </nav>

    <!-- Upload Section -->
    <form action = "upload.php" method = "POST" enctype = "multipart/form-data">
        <div class="w3-container" style="padding:128px 16px" id="about">
            <h3 class="w3-center">Begin Comparison</h3>
            <p class="w3-center w3-large">To begin the comparison, please select the following:</p>
            <div class="w3-row-padding w3-center" style="margin-top:64px">
                <div class="w3-third">
                    <i class="fa fa-medkit w3-margin-bottom w3-jumbo w3-center"></i>
                    <p class="w3-large">Case Type</p>
                    <p>Select the type of case you would like to compare:</p>
                    <select name="mysets" id="mysets">
                        <option value="flat">Flat Case</option>
                        <option value="assembled">Folded/ Assembled Case</option>
                    </select><br>
                </div>
                <div class="w3-third">
                    <i class="fa fa-file-photo-o w3-margin-bottom w3-jumbo"></i>
                    <p class="w3-large">Taken Image</p>
                    <p>Upload a picture of the case you are comparing (must be a .jpg .jpeg or .png)</p>
                    <input type = "file" name = "file"><br>
                </div>
                <div class="w3-third">
                    <i class="fa fa-file-pdf-o w3-margin-bottom w3-jumbo"></i>
                    <p class="w3-large">Blueprint</p>
                    <p>Upload the blueprint of your case (must be a .pdf)</p>
                    <input type = "file" name = "pdf"><br>
                </div>
            </div>
            <div class="w3-container" style="padding:128px 16px" id="team">
                <h3 class="w3-center">Submit</h3>
                <p class="w3-center w3-large">When you have chosen your case type and uploaded your photo and pdf press submit.</p>
                <button class = "button" type = "submit" name = "submit">UPLOAD</button>
            </div>
        </div>
    </form>

    <!-- Footer -->
    <footer class="w3-center w3-blue-grey w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <a href="https://www.facebook.com/casemedical/"><i class="fa fa-facebook w3-hover-opacity"></i></a>
        <a href = "https://twitter.com/casemedical"><i class="fa fa-twitter w3-hover-opacity"></i></a>
        <a href = "https://www.linkedin.com/company/case-medical-inc./"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
        <p class="w3-center w3-large">NJIT Capstone Program: Spring 2022</p>
    </div>
    </footer>
    
    <script>
    // Modal Image Gallery
    function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
    </script>

</body>
</html>