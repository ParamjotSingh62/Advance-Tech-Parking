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
    <script src="js/angular.min.js"></script>
    <style>
        .mandatory {
            color: red;
        }

    </style>
    <script>
        function checkDate() {
            var selectedText = document.getElementById('date').value;
            var selectedDate = new Date(selectedText);
            var now = new Date();
            if (selectedDate < now) {
                alert("Date must be in the future");
                document.getElementById("errDate").innerHTML = " Cannot Select date from Past.";
            }
        }

    </script>
    <script>
        var varModule = angular.module("myModule", []);
        varModule.controller("myController", function($scope, $http) {

            $scope.fetchbookings = function() {
                $scope.uid = $("#txtUid").val();
                if ($scope.uid == "") {
                    $("#errUid").html("Enter User Id").css("color", "red");
                } else {
                    $("#errUid").html("");
                    $http.get("Json-fetch-my-booking.php?uid=" + $scope.uid).then(ok, notok);

                    function ok(resp) {
                        alert(JSON.stringify(resp.data));
                        $scope.bookingAry = resp.data;

                        //                        if ($scope.slotselected.length == 0) {
                        //                            $scope.answer = "Not Found";
                        //                        }

                    }

                    function notok(resp) {
                        alert(resp.data);
                    }
                }

            }
        });

    </script>
</head>

<body ng-app="myModule" ng-controller="myController" ng-init="fetchDate();">
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
            <!--
            <a style="margin-left:120px">
                <font face="Malgun Gothic" color="white" size="5">[_customer name_]'s Dashboard</font>
            </a>
-->
            <div style=" margin-left: auto">
                <a class="btn btn-primary float-left" style=" width:130px" href="dashboard.php"><i class="fa fa-home" style="font-size: 20px" aria-hidden="true"></i> Home</a>
                <a class="btn btn-light float-left" href="instruction.php" style="margin-left: 5px; width:165px"><img src="pics/instruction.png" height="25px" width="50px" style="margin-top:-5px">Instructions</a>
                <a class="btn btn-info float-left" href="aboutus.php" style="margin-left: 5px; width:150px"><i class="fa fa-address-card" style="font-size: 20px" aria-hidden="true"></i> Contact Us</a>
            </div>
        </nav>
        <div class="container-md" style=" background-color:lightgrey">
            <div class="h2 border " style="background-color: #09203f; color: white;">
                <center>
                    <font face="Segoe Print" size="6">Notification panel</font>
                </center>
            </div>
            <form action="profile-update-backend.php" method="post" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="col-md-8 form-group">
                        <label for="txtUid">User ID<span class="mandatory"> *</span></label>
                        <input type="text" id="txtUid" name="txtUid" class="form-control">
                        <span id="errUid" class="form-text "></span>
                    </div>

                    <div class="col-md-2 offset-1 form-group">
                        <label for="fetchtimeslot"></label>
                        <input type="button" class="btn btn-secondary" value="Show my Bookings" ng-click="fetchbookings()">
                        <span id="errfetch" class="form-text" style="color: blue"></span>

                    </div>
                </div>

            </form>

        </div>
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead class="thead-dark">
                        <tr bgcolor="black" align="center">
                            <th style="color:white;">Sr. No.</th>
                            <th style="color:white;">Date of Booking</th>
                            <th style="color:white;">Time slot</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: white" align="center">
                        <tr ng-repeat="obj in bookingAry">
                            <td>{{$index+1}}</td>
                            <td>{{obj.date}}</td>
                            <td>{{obj.slottime}}</td>


                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
   

</body>

</html>
