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
        .service {
            /* width: inherit;*/
            height: 60px;
            border: 1px solid black;
            font-size: 35px;
            text-align: center;
            background-color: #09203f;
            color: white;

        }

        #cards {
            display: flex;
            /* or inline-flex */
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-evenly;
        }

        .ok {
            /*color: green;*/
            background-image: url(pics/greentic.png);
            background-repeat: no-repeat;
            background-size: contain;

            transition: ease all 1s;
        }

        .not-ok {
            /*color: red;*/
            background-image: url(pics/cross.png);
            background-repeat: no-repeat;
            background-size: contain;
            transition: ease all 1s;
        }

        .err {
            display: inline-block;
            margin-left: 10px;
            margin-top: 3px;
            width: 17px;
            height: 17px;
            transition: ease all 1s;
        }
        .mandatory{
            color: red;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#txtUid").blur(function() {

                /*var r=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/   ;*/

                var uid = $("#txtUid").val();

                if (uid == "") {
                    $("#errSUid").html("Fill the UserId");
                } else {
                    $("#errSUid").html("");
                    var actionUrl = "ajax-signup-user-chk.php?uid=" + uid;
                    $.get(actionUrl, function(response) {
                        if (response == "Not Available") {
                            $("#avalUid").html(response).css("color", "red");
                            $("#errUid").removeClass("ok").addClass("not-ok");
                        } else {
                            $("#avalUid").html(response).css("color", "green")
                            $("#errUid").removeClass("not-ok").addClass("ok");
                        }

                    });
                }

            });

            $("#txtFullName").keydown(function() {
                var name = $(this).val();
                if (name.length <= 6) {
                    $("#errFullName").removeClass("ok").addClass("not-ok");
                } else {
                    $("#errFullName").removeClass("not-ok").addClass("ok");
                }
            });


            $("#txtPwd").keydown(function() {
                var pwd = $(this).val();
                if (pwd.length <= 6) {
                    $("#errPwd").html("weak");
                    $("#errPassword").removeClass("ok").addClass("not-ok");
                } else {
                    $("#errPwd").html("Strong");
                    $("#errPassword").removeClass("not-ok").addClass("ok");
                }

            });


            $("#txtMob").blur(function() {
                var r = /^[6-9]{1}[0-9]{9}$/;
                var pwd = $("#txtMob").val();

                if (r.test(pwd) == false) {
                    $("#errMob").html("Invalid Mobile number");
                    $("#errMobile").removeClass("ok").addClass("not-ok");
                } else {
                    $("#errMob").html("Okay");
                    $("#errMobile").removeClass("not-ok").addClass("ok");
                }

            });



            $("#signup").click(function() {
                //alert("knsjdbbmn");
                var uid = $("#txtUid").val();
                var fullname = $("#txtFullName").val();
                var pwd = $("#txtPwd").val();
                var mobile = $("#txtMob").val();
                if (uid == "" || fullname == "" || pwd == "" || mobile == "") {
                    $("#signupnotify").html("Enter above all fields");
                } else {
                    var actionUrl = "ajax-signup-main.php?uid=" + uid + "&fullname=" + fullname + "&pwd=" + pwd + "&mobile=" + mobile;
                    $.get(actionUrl, function(response) {

                        $("#signupnotify").html(response);

                    });
                }
            });
            $("#login").click(function() {
                var uid1 = $("#txtUid1").val();
                var pwd1 = $("#txtPwd1").val();
                if (uid1 == "" || pwd1 == "") {
                    $("#loginnotify").html("Enter above fields");
                } else {
                    var actionUrl1 = "ajax-login-main.php?uid=" + uid1 + "&pwd=" + pwd1;
                    $.get(actionUrl1, function(response) {
                        
                        if(response==1)
                        {
                            $("#loginnotify").html("Successfully Signed Up with UserID: "+uid1);
                            location.href="dashboard.php";
                        }
                        else{
                             $("#loginnotify").html("Invalid username or password");
                        }
                       
                    });
                }
            });
            $("#forgotpwd").click(function(){
                var uid2 = $("#txtUid2").val();
                var mail = $("#txtMail").val();
                if (uid2 == "" || mail == "") {
                    $("#forgetpwdnotify").html("Enter above fields");
                }
                else{
                    var actionUrl2 = "ajax-forget-pwd.php?uid=" + uid2 + "&mail=" + mail;
                    
                    $.get(actionUrl2, function(response) {
                         
                        if(response==0)
                        {
                            
                             $("#forgetpwdnotify").html("Invalid user id");
                        }
                        else{
                    
                            $("#forgetpwdnotify").html("Password sent on "+mail);
                       }
                       
                    });
                }
            });
        });

    </script>
</head>

<body>
    <div class="row">
        <nav class="col-md-12 navbar navbar-expand-lg navbar-dark" style="background-color: #09203f;">
            <a class="navbar-brand" href="index.php">
                <img src="pics/parking.jpg" width="50" height="50" style="border-radius:30%" alt="" loading="lazy">
            </a>
            <a class="navbar-brand" href="index.php">
                <font face="Matura MT Script Capitals" size="6">AdvanceTech Parking</font>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <!--      <span class="navbar-toggler-icon"></span>   -->
            </button>

            <div style=" margin-left: auto">
                <div class="btn btn-primary float-left" data-toggle="modal" data-target="#modalSignup" style=" width:150px"><i class="fa fa-user-plus" style="font-size: 20px" aria-hidden="true"></i> Signup</div>
                <div class="btn btn-primary float-left" data-toggle="modal" data-target="#modalLogin" style="margin-left: 5px; width:150px"><i class="fa fa-sign-in" style="font-size: 20px" aria-hidden="true"></i> Login</div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="pics/crousle1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="pics/crousle2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="pics/crousle3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="service row">
        <div class="col-md-12">
            <font face="Matura MT Script Capitals">Our Services</font>
        </div>
    </div>
    <div class="container" id="cards" style="flex-direction:">
        <div class="card" style="width: 18rem;float:left">
            <img src="pics/direction.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Wayfinding Service</h5>
                <p class="card-text">We provide wayfinding function that not only indicates available parking spaces, but also provides specific directions to assist customers with locating a parking space.
                    Streamlined Self-Checkout Flow.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;float:left">
            <img src="pics/payment%20service.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Self Checkout Flow</h5>
                <p class="card-text">Advantech’s intelligent parking service system can be equipped with a camera, printer, and payment terminal to support self-service applications. Customers can easily pay parking fees using cash, credit cards, and even mobile devices.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;float:left">
            <img src="pics/mangement.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Remote Monitoring and Management </h5>
                <p class="card-text">Intelligent parking service system terminals can also be equipped with Advantech’s remote management software which enables managers to remotely monitor devices, conduct database backups and recovery, and configure a power on/off schedule to protect the system from unwanted applications.</p>
            </div>
        </div>
    </div>


    <!---------------------------------modal------------------------>
    <div class="modal fade" tabindex="-1" role="dialog" id="modalSignup">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #09203f;">
                    <h5 class="modal-title" style="color: white">Signup</h5>
                    <button type="button" class="close  btn-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label for="txtUid">User Id</label>
                            <div id="errUid" class="err"></div>
                            <input type="text" required class="form-control" name="txtUid" id="txtUid">
                            <span id="errSUid" class="form-text text-muted" style="text-align: right"></span>
                            <span id="avalUid" class="form-text " style="text-align: left"></span>
                        </div>
                        <div class="form-group">
                            <label for="txtFullName">Full Name</label>
                            <div id="errFullName" class="err"></div>
                            <input type="text" required class="form-control" name="txtFullName" id="txtFullName">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <div id="errPassword" class="err"></div>
                            <input type="password" required class="form-control" name="txyPwd" id="txtPwd">
                            <span id="errPwd" class="form-text text-muted" style="text-align: right"></span>
                        </div>
                        <div class="form-group">
                            <label for="txtMob">Mobile Number</label>
                            <div id="errMobile" class="err"></div>
                            <input type="text" required class="form-control" name="txtMob" id="txtMob">
                            <small id="errMob" class="form-text text-muted" style="text-align: right"></small>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <span class="form-text" id="signupnotify"></span>
                    <input type="button" class="btn btn-primary" id="signup" value="Submit">
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modalLogin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #09203f;">
                    <h5 class="modal-title" style="color: white">Login</h5>
                    <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label for="txtUid1">User Id</label>
                            <input type="text" class="form-control" name="txtUid1" id="txtUid1">
                        </div>
                        <div class="form-group">
                            <label for="txtPwd1">Password</label>
                            <input type="password" class="form-control" name="txyPwd1" id="txtPwd1">
                            <a data-toggle="modal" href="#Forgetpwd" data-dismiss="modal">Forget password?</a>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <span class="form-text " id="loginnotify"></span>
                    <input type="button" class="btn btn-primary" id="login" value="Login">
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="Forgetpwd">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #09203f;">
                    <h5 class="modal-title" style="color: white">Forget Password</h5>
                    <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label for="txtUid2">User Id</label><span class="mandatory"> *</span>
                            <input type="text" class="form-control" name="txtUid2" id="txtUid2">
                            
                        </div>
                        <div class="form-group">
                            <label for="txtMail">Mail id</label><span class="mandatory"> *</span>
                            <input type="text" class="form-control" name="txtMail" id="txtMail">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <span class="form-text text-muted" id="forgetpwdnotify"></span>
                    <input type="button" class="btn btn-info" id="forgotpwd" value="Send Message">
                </div>

            </div>
        </div>
    </div>
</body>

</html>
