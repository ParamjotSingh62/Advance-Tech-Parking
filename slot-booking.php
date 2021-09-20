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

                $scope.fetchDate = function() {

                    $http.get("JSON-fetch-date.php").then(ok, notok);

                    function ok(resp) {
                        //     alert(JSON.stringify(resp.data));
                        $scope.dateAry = resp.data;

                        $scope.selObj = $scope.dateAry[0];
                    }

                    function notok(resp) {
                        alert(resp.data);
                    }
                }
                $scope.fetchSlot = function() {
                    var uid = $("#txtUid").val();
                    $scope.uid = uid;
                    if (uid == "") {
                        $("#errUid").html("Enter User Id").css("color", "red");
                        alert("Enter UserId")
                    } else {
                        $("#errUid").html("").css("color", "red");
                        $http.get("Json-fetch-slot.php?date=" + $scope.selObj.date).then(ok, notok);

                        function ok(resp) {
                            //        alert(JSON.stringify(resp.data));
                            $scope.slotselected = resp.data;
                            if ($scope.slotselected.length == 0) {
                                $scope.answer = "Not Found";
                            }

                        }

                        function notok(resp) {
                            alert(resp.data);
                        }
                    }
                }
                $scope.bookSlot = function(obj) {
                    //alert(JSON.stringify(obj));
                    $scope.showAry = obj;
                    //alert($scope.showAry);
                    $scope.x = 0;
                    if (obj.availableslots > 0) {
                        //alert($scope.x);
                        $http.get("Json-update-slot.php?date=" + obj.date + "&slottime=" + obj.slottime).then(ok, notok);

                        function ok(resp) {
                            // alert(JSON.stringify(resp.data));

                            if (resp.data == "Table updated") {
                                alert("table updated");
                                $scope.x = 1;

                            }
                        }

                        function notok(resp) {
                            alert(resp.data);
                            $scope.x = 0;
                        }
                        //                    -=-=-===============================----------------------
                        $http.get("Json-book-slot.php?date=" + obj.date + "&uid=" + $scope.uid + "&slottime=" + obj.slottime).then(ok, notok);

                        function ok(resp) {
                            //        alert(JSON.stringify(resp.data));

                            if (resp.data == "Slot Booked") {
                                alert("Slot Booked");
                                $scope.x = 1;

                            }
                        }

                        function notok(resp) {
                            alert(resp.data);
                            $scope.x = 0;
                        }


                        //                    -=-=-=--=-=--=--=--=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=
                        if ($scope.x == 0) {
                            $http.get("Json-fetch-info-for-slipgeneration.php?uid=" + $scope.uid).then(ok, notok);

                            function ok(resp) {
                                alert(JSON.stringify(resp.data));
                                $scope.slipAry = resp.data;

                                $scope.selslipObj = $scope.slipAry[0];
                                alert($scope.selslipObj.name);
                            }

                            function notok(resp) {
                                alert(resp.data);
                            }
                        }
                    } else {
                        alert("NO SLOTS AVAILABLE")
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
                        <font face="Segoe Print" size="6">Slot Booking</font>
                    </center>
                </div>
                <form action="profile-update-backend.php" method="post" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="col-md-8 form-group">
                            <label for="txtUid">User ID<span class="mandatory"> *</span></label>
                            <input type="text" id="txtUid" name="txtUid" class="form-control">
                            <span id="errUid" class="form-text "></span>
                        </div>
                        <div class="col-md-8 form-group">

                            <label for="date"> Select date<span class="mandatory"> *</span></label>
                            <select ng-model="selObj" ng-options="obj.date for obj in dateAry"></select>


                            <span id="errDate" class="form-text "></span>
                        </div>
                        <div class="col-md-2 offset-1 form-group">
                            <label for="fetchtimeslot"></label>
                            <input type="button" class="btn btn-secondary" value="Choose Available time slot" ng-click="fetchSlot()">
                            <span id="errfetch" class="form-text" style="color: blue"></span>

                        </div>
                    </div>

                </form>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4" ng-repeat="obj in slotselected">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title">Slot Time : {{obj.slottime}}</h5>
                                <p class="card-text">Available Slots : {{obj.availableslots}}</p>
                                <div ng-if="obj.availableslots == 0">
                                   <input type="button" class="btn btn-primary" ng-click="bookSlot(obj)" value="Book Slot" data-toggle="modal" data-target="#showslip" disabled>
                                </div>
                                <div ng-if="obj.availableslots != 0">
                                     <input type="button" class="btn btn-primary" ng-click="bookSlot(obj)" value="Book Slot" data-toggle="modal" data-target="#showslip">
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="showslip">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header " style="background-color: #09203f;">
                        <h5 class="modal-title" style="color:white">Booking Slip</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <center>
                                <table cellpadding="10">
                                    <tr>
                                        <h4>Take Photo or Screenshot of the Booking slip.</h4>
                                    </tr>
                                    <tr>
                                        <td>Vehicle Number: <b>{{selslipObj.vpn}}</b></td>
                                    </tr>
                                    <tr>
                                        <td style=" width:220px">User ID: <b>{{selslipObj.uid}}</b></td>
                                        <td style=" width:220px">Full Name: <b>{{selslipObj.name}}</b></td>
                                    </tr>
                                    <tr>
                                        <td style=" width:220px">Date: <b>{{showAry.date}}</b></td>
                                        <td style=" width:220px">Time: <b>{{showAry.slottime}}</b></td>
                                    </tr>

                                </table>
                            </center>

                        </form>
                    </div>
                    <div class="modal-footer">

                        <input type="button" class="btn btn-primary" value="Okay" data-dismiss="modal">
                    </div>

                </div>
            </div>
        </div>
    </body>

    </html>
