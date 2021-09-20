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
    <script>
        function showpreview(file) {

            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(ev) {
                    $('#preview').attr('src', ev.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }

        }

    </script>
    <script>
        $(document).ready(function() {

            $("#fetchprofile").click(function() {
                // alert("kdfbskdjbfkdb");
                var uid = $("#txtUid").val();
                alert(uid);
                var url = "Json-fetch-profile.php?uid=" + uid;
                //0 or 1 possibility
                $.getJSON(url, function(jsonAryResponse) {
                    //alert(JSON.stringify(jsonAryResponse));

                    if (jsonAryResponse.length == 0)
                        $("#errfetch").html("you need to save profile as you are first timer.").css('color', 'red');
                    else {
                        $("#errfetch").html("valid Username").css('color', 'blue');
                        $("#txtUid").val(jsonAryResponse[0].uid);
                        $("#txtVPN").val(jsonAryResponse[0].vpn);
                        $("#txtName").val(jsonAryResponse[0].name);
                        $("#txtContact").val(jsonAryResponse[0].contact);
                        $("#txtAddress").val(jsonAryResponse[0].address);
                        $("#txtEmail").val(jsonAryResponse[0].email);
                        $("#hdn").val(jsonAryResponse[0].pic);
                        $("#preview").attr("src", "uploads/" + jsonAryResponse[0].pic);
                    }
                });
            });
        });

    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="form-row">
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
                <!--   <a style="margin-left:120px">
                <font face="Malgun Gothic" color="white" size="5">Profile Update</font>
            </a> -->
                <div style=" margin-left: auto">
                <a class="btn btn-primary float-left" style=" width:130px" href="dashboard.php"><i class="fa fa-home" style="font-size: 20px" aria-hidden="true"></i> Home</a>
                <a class="btn btn-light float-left" href="instruction.php" style="margin-left: 5px; width:165px"><img src="pics/instruction.png" height="25px" width="50px" style="margin-top:-5px">Instructions</a>
                <a class="btn btn-info float-left" href="aboutus.php" style="margin-left: 5px; width:150px"><i class="fa fa-address-card" style="font-size: 20px" aria-hidden="true"></i> Contact Us</a>
            </div>
            </nav>
        </div>
        <div class="container-md" style=" background-color:lightgrey">
            <div class="h2 border " style="background-color: #09203f; color: white;">
                <center>
                    <font face="Segoe Print" size="6">Profile Update</font>
                </center>
            </div>
            <form action="profile-update-backend.php" method="post" enctype="multipart/form-data">
                <input type="hidden" id="hdn" name="hdn">
                <div class="form-row">
                    <div class="col-md-8 form-group">
                        <label for="txtUid">User ID<span class="mandatory"> *</span></label>
                        <input type="text" id="txtUid" name="txtUid" class="form-control">
                        <span id="errUid" class="form-text text-muted"></span>
                    </div>
                    <div class="col-md-2 offset-1 form-group">
                        <input type="button" class="btn btn-secondary" value="Fetch Profile" id="fetchprofile" name="fetchprofile">
                        <span id="errfetch" class="form-text" style="color: blue"></span>
                    </div>
                    <div class="col-md-12" style="display:flex;flex-direction:row">
                        <div class="col-md-6  form-group" style="margin-top:10px">
                            <label for="">Vehicle Plate Number<span class="mandatory"> *</span></label>
                            <input type="text" id="txtVPN" name="txtVPN" style="height:90px;font-size:35px" class="form-control">
                            <span id="errfetch" class="form-text" style="color: blue"></span>
                        </div>
                        <div class="col-md-6" style="display:flex;flex-direction:column">
                            <div class="col-md-12  form-group">
                                <label for="">Full Name<span class="mandatory"> *</span></label>
                                <input type="text" id="txtName" required name="txtName" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Contact Number<span class="mandatory"> *</span></label>
                                <input type="number" id="txtContact" required name="txtContact" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 form-group">
                        <lable for="">Address<span class="mandatory"> *</span></lable>
                        <input type="text" required id="txtAddress" name="txtAddress" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <lable for="">Email<span class="mandatory"> *</span></lable>
                        <input type="text" id="txtEmail" name="txtEmail" class="form-control">
                        <span id="errSEmail" class="form-text text-muted" style="text-align:right"></span>
                    </div>
                    <div class="col-md-6 form-group">
                        <lable>Upload Citizen Proof</lable>
                        <input type="file" id="fileProfile" name="fileProfile" class="form-control" onchange="showpreview(this);">
                    </div>
                    <div class="col-md-6 form-group">
                        <lable>Preview</lable>
                        <img src="pics/aadhar.jpg" width="200" height="140" id="preview" style="margin-top:10px; margin-left: 120px" >
                    </div>


                    <div class="col-md-12 offset-5 form-group ">
                        <input type="submit" id="Save" name="btn" value="Save" class="btn btn-success" style="width:100px">
                        <input type="submit" id="Update" name="btn" value="Update" class="btn btn-primary" style="width:100px; ">
                    </div>
                </div>


            </form>
        </div>
    </div>
</body>

</html>
