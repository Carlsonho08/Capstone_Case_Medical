<<!DOCTYPE html>
<html>
    <head>
        <title>CaseVision</title>
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

            /* Full height image header */
            .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url(SiteImg/r.jpg);
            min-height: 100%;
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
                <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
                <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
                <a href="uploadpg.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> UPLOAD</a>
                <a href="https://www.casemed.com/index.php" class="w3-bar-item w3-button"><i class="fa fa-desktop"></i> WEBSITE</a>
                <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()"><i class="fa fa-bars"></i></a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
        <a href="uploadpg.php" onclick="w3_close()" class="w3-bar-item w3-button">UPLOAD</a>
        <a href="https://www.casemed.com/index.php" onclick="w3_close()" class="w3-bar-item w3-button">WEBSITE</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    </nav>

    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">Quality Assurance Checks for Our Cases</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">Quality Assurance Checks for Our Cases</span><br>
            <p><a href="uploadpg.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Begin and upload a picture of a case.</a></p>
        </div> 
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
    </header>

    <!-- About Section -->
    <div class="w3-container" style="padding:128px 16px" id="about">
        <h3 class="w3-center">ABOUT CASEVISION</h3>
        <p class="w3-center w3-large">Key features of our web application</p>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-third">
                <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
                <p class="w3-large">Responsive</p>
                <p>The website has been made to be responsive and accessible on any sized device. </p>
            </div>
            <div class="w3-third">
                <i class="fa fa-code w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Coding Languages</p>
                <p>The front end of the web app is coded using HTML5, CSS, PHP, and JavaScript | The back end is coded using Python</p>
            </div>
            <div class="w3-third">
                <i class="fa fa-lightbulb-o w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Machine Learning</p>
                <p>Python application uses open source machine learning libraries (OpenCV, TensorFlow, and Keras) and Data Analytics Libraries (Numpy, Matplotlib, and Pandas).</p>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="w3-container" style="padding:128px 16px" id="team">
        <h3 class="w3-center">The NJIT Team</h3>
        <p class="w3-center w3-large">This is the team of NJIT students who created the web-application!</p>
        <div class="w3-row-padding w3-grayscale-min" style="margin-top:64px">
            <div class="w3-col l2 m4 w3-margin-bottom">
                <div class="w3-card">
                    <img src="SiteImg/darshan.jpg" alt="Darshan" style="width:100%">
                    <div class="w3-container">
                        <h3>Darshan Patel</h3>
                        <p class="w3-opacity">Back End Developer</p>
                        <p>NJIT senior, expected to graduate with a BS in Business & Information Systems.</p>
                    </div>
                </div>
            </div>
            <div class="w3-col l2 m4 w3-margin-bottom">
                <div class="w3-card">
                    <img src="SiteImg/james.png" alt="James" style="width:100%">
                    <div class="w3-container">
                        <h3>James Ferry</h3>
                        <p class="w3-opacity">Web Designer</p>
                        <p>NJIT senior, expected to graduate with a BS in Business & Information Systems.</p>
                    </div>
                </div>
            </div>
            <div class="w3-col l2 m4 w3-margin-bottom">
                <div class="w3-card">
                    <img src="SiteImg/jp.jpg" alt="JP" style="width:100%">
                    <div class="w3-container">
                        <h3>Jeanpierre Rea</h3>
                        <p class="w3-opacity">Back End Developer </p>
                        <p>NJIT senior, graduating with a BS in Information Technology.</p>
                    </div>
                </div>
            </div>
            <div class="w3-col l2 m4 w3-margin-bottom">
                <div class="w3-card">
                    <img src="SiteImg/Juan.jpg" alt="Juan" style="width:100%">
                    <div class="w3-container">
                        <h3>Juan Ceballos</h3>
                        <p class="w3-opacity">Back End Developer</p>
                        <p>NJIT senior, expected to graduate with a BS in Computer Science</p>
                    </div>
                </div>
            </div>
            <div class="w3-col l2 m4 w3-margin-bottom">
                <div class="w3-card">
                    <img src="SiteImg/ka.jpg" alt="Ka" style="width:100%">
                    <div class="w3-container">
                        <h3>Ka Chun Ho</h3>
                        <p class="w3-opacity">Project Manager</p>
                        <p>NJIT senior, skilled in frontend development and project management, a MS student at Business information system starting Fall 2022.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo Section -->
    <div class="w3-container w3-row w3-center w3-blue-grey w3-padding-64">
        <div class="w3-quarter">
            <span class="w3-xxlarge"></span>
            <br>Quality of Care
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge"></span>
            <br>Cost Effective
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge"></span>
            <br>Successful Outcomes
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge"></span>
            <br>Infection Prevention
        </div>
    </div>

    <!-- Test Statistics Section -->
    <!--<div class="w3-container w3-light-grey w3-padding-64">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <h3>Test Statistics</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-col m6">
                <p class="w3-wide"><i class="fa fa-bar-chart w3-margin-right"></i>Reliability</p>
                <div class="w3-dark-grey">
                    <div class="w3-container w3-blue-grey w3-center" style="width:100%">100%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-close w3-margin-right"></i>Errors</p>
                <div class="w3-dark-grey">
                    <div class="w3-container w3-blue-grey w3-center" style="width:85%">85%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-check w3-margin-right"></i>Success</p>
                <div class="w3-dark-grey">
                    <div class="w3-container w3-blue-grey w3-center" style="width:75%">75%</div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Contact Section -->
    <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
        <h3 class="w3-center">CONTACT INFORMATION</h3>
        <p class="w3-center w3-large">For questions or concerns, please contact Case Medical Inc. @:</p>
        <div class = "w3-center"style="margin-top:48px">
            <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> 50 West Street, Bloomfield, NJ 07003 | Mon - Fri: 8 a.m.-6 p.m.</p>
            <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 1-888-277-CASE</p>
            <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: info@casemed.com</p>
            <br>

            <!-- Image of location/map -->
            <img src="SiteImg/Location.png" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
        </div>
    </div>

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