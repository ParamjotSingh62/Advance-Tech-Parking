<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.8.2.min.js"></script>
    <style>
        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;

        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.8);
            background-color: #e6ffff;
            transform: scale(1.03);
            transition: transform 0.8s;
        }

    </style>
</head>

<body>
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
                <font face="Malgun Gothic" color="white" size="5">[_customer name_]'s Dashboard</font>
            </a>
            <div style=" margin-left: auto">
                <a class="btn btn-primary float-left" style=" width:130px" href="dashboard.php"><i class="fa fa-home" style="font-size: 20px" aria-hidden="true"></i> Home</a>
                <a class="btn btn-light float-left" href="instruction.php" style="margin-left: 5px; width:165px"><img src="pics/instruction.png" height="25px" width="50px" style="margin-top:-5px">Instructions</a>
                <a class="btn btn-info float-left" href="aboutus.php" style="margin-left: 5px; width:150px"><i class="fa fa-address-card" style="font-size: 20px" aria-hidden="true"></i> Contact Us</a>
            </div>


        </nav>

        <div class="container container-fluid" style="">
            <a href="profile-update.php" style="text-decoration:none;color:black">
                <div class="card mb-3" style="max-width: 540px;float:left;margin-top:30px;margin-left:0px">
                    <div class="row no-gutters">

                        <div class="col-md-4">
                            <img src="pics/updateProfile.png" class="card-img" alt="..." height="170px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Profile Update</h4>
                                <p class="card-text">Update your profile here. Must update before entery/slot booking. Identification proof like Driving License or Adhaar Card is also required.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </a>
            <a href="slot-booking.php" style="text-decoration:none;color:black">
                <div class="card mb-3" style="max-width: 540px;float:left;margin-top:30px;margin-left:30px">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="pics/slotbooking.jpg" class="card-img" alt="..." height="175px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Slot Booking/Entry</h4>
                                <p class="card-text">After updating the your profile, Select on what date you want to park and for how much time and then choose the slot for parking for booking your slot.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="notification.php" style="text-decoration:none;color:black">
                <div class="card mb-3" style="max-width: 540px;float:left;margin-top:30px;margin-left:0px">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="pics/bookings-logo.png" class="card-img" alt="..." style="margin-top:0px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Notification</h4>
                                <p class="card-text">Here you can check all bookings past as well as future. Just Enter your userid and click on show "my bookings button". Hope you find it easy :-)</p>

                            </div>
                        </div>
                    </div>
                </div></a>
                <a href="feedback-front.php" style="text-decoration:none;color:black">
                    <div class="card mb-3" style="max-width: 540px;float:left;margin-top:30px;margin-left:30px">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="pics/feedback.webp" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">Feedback</h4>
                                    <p class="card-text">We would like your feedback to improve our website.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="index.php" style="text-decoration:none; color:black">
                    <div class="card mb-3" style="max-width: 540px;float:left;margin-top:30px;margin-left:0px">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="pics//logout1.jpg" class="card-img" alt="..." style="border-radius:50%; ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">Logout</h4>
                                    <p class="card-text">Update your profile here. Must update before entery/slot booking. Identification proof like Driving License or Adhaar Card is also required.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
        </div>
    </div>
</body>

</html>
