<html>

<head>
    <title>HELP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.8.2.min.js"></script>
    <style type="text/css">
        .body {
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-image: url(pics/instructionback3.gif);
            background-size: cover;
        }

        .container {
            width: 100%;
            height: 100%;

        }

        .container .inner {
            //position: absolute;
            width: 100%;
        }
        li{
            color: black;
        }

        .container .inner p {
            color: black;
            font-size: 45px;
            font-family: arial;
            text-align: relative;
        }

    </style>
</head>

<body class="body">
    <div class="row">
        <nav class="col-md-12 navbar navbar-expand-lg navbar-dark" style="background-color: #09203f;">
            <a class="navbar-brand" href="dashboard.php">
                <img src="pics/parking.jpg" width="50" height="50" style="border-radius:30%" alt="" loading="lazy">
            </a>
            <a class="navbar-brand" href="dashboard.php">
                <font face="Matura MT Script Capitals" size="6">AdvanceTech Parking</font>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <!--      <span class="navbar-toggler-icon"></span>   -->
            </button>
            <a style="margin-left:120px">
                
            </a>
            <div style=" margin-left: auto">
                <a class="btn btn-primary float-left" style=" width:130px" href="dashboard.php"><i class="fa fa-home" style="font-size: 20px" aria-hidden="true"></i> Home</a>
                <a class="btn btn-light float-left" href="instruction.php" style="margin-left: 5px; width:165px"><img src="pics/instruction.png" height="25px" width="50px" style="margin-top:-5px">Instructions</a>
                <a class="btn btn-info float-left" href="aboutus.php" style="margin-left: 5px; width:150px"><i class="fa fa-address-card" style="font-size: 20px" aria-hidden="true"></i> Contact Us</a>
            </div>


        </nav>
    </div>
    <div class="container ">
        <div class="inner">
            <h1 style="text-align:center;font-family: Cooper;font-size:300%">Instructions</h1>
            <h2> Profile Update</h2>
            <ol>
                <li>If you are the first timer to this site, first you need to fill all the required details. Then, click on "Save" button. to save your record.</li>
                <li>"Fetch button" <img src="pics/fetchbutton.PNG" width="100px"> will be of no use, if you updating your profile for first time.</li>
                <li>If you need to update the your profile, i.e. need to change any infomation then GO to <a href="profile-update.php">Profile-Update</a> on <a href="dashboard.php">Dashboard</a>.</li>
                <li>Click on Fetch button, your prior data will be fetched from the database, and make the required changes and click on "Update" button.</li>
                <li>After You click on either button i.e. "Save" button Or "Update" buttion, wait for about '3 seconds', the page will be automatically redirected to your desktop.</li>
                <li> Still faceing PROBLEM? Contact us:-<a href="aboutus.php"> Contact Us</a>
            </ol>
            <h2> Slot Booking</h2>
            <ol>
                <li>After update profile now you are ready to book slot for you vechile.Now your panel is open you can click on Entry hoverbox here you can choose you comfortable timing for park your vechile.</li>
                <li>If you need to update the your profile, i.e. need to change any infomation then GO to <a href="#">Slot Booking </a> on Dashboard.</li>
                <li>-------------------</li>
                <li> Still faceing PROBLEM? <a href="#"> About Us</a>
            </ol>
            <h2> About us</h2>
            <ol>
                <li>If you are the first timer to this site and facing problems in previous steps then goto -> <a href="#">About us </a> .</li>
                <li>After getting your response we will contact with you as soon as possible. THANK YOU!!</li>
            </ol>
            <h2> Feedback</h2>
            <ol>
                <li>Here you can share your reviews with us.</li>
                <li>We hope you like our service!! :) Please share your honest reviews and comments</li>
            </ol>
        </div>
    </div>
</body>

</html>
