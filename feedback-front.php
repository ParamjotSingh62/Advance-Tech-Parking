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
        .mandatory {
            color: red;
        }

        input[type=radio] {
            border: 0px;
            width: 100%;
            height: 1.8em;
        }

    </style>
    <script>
        $(document).ready(function() {
            var expect="";
            var nav="";
            var exp="";
            var helpp="";
            var recommend="";
            var uid="";
            $(".radioexpect").click(function() {
                if ($("input[type='radio'].radioexpect").is(':checked')) {
                    expect = $("input[type='radio'].radioexpect:checked").val();
                    alert(expect);
                }
            });
            $(".radionavigate").click(function() {
                if ($("input[type='radio'].radionavigate").is(':checked')) {
                    nav = $("input[type='radio'].radionavigate:checked").val();
                    alert(nav);
                }
            });
//            $(".radiohelp").click(function() {
//                if ($("input[type='radio'].radiohelp").is(':checked')) {
//                    helpp = $("input[type='radio'].radiohelp:checked").html;
//                    alert(helpp);
//                    alert("kjdfbkdsbfk");
//                }
//            });
            $(".radioexp").click(function() {
                if ($("input[type='radio'].radioexp").is(':checked')) {
                    exp = $("input[type='radio'].radioexp:checked").val();
                    alert(exp);
                }
            });
            $(".radiorecommend").click(function() {
                if ($("input[type='radio'].radiorecommend").is(':checked')) {
                    recommend = $("input[type='radio'].radiorecommend:checked").val();
                    alert(recommend);
                }
            });
            $("#Submit").click(function() {
                var textfeed=$("#txtFeed").val();
                alert(textfeed);
                uid = $("#txtUid").val();
                alert(uid);
                var a="0";
                var b="0";
                var c="0";
                var d="0";
                var e="0";
                if(uid=="")
                    {
                        $("#errUid").html("Enter Uid.").css("color","red");
                        a="1";
                    }
                if(!uid=="")
                    {
                        {
                        $("#errUid").html("").css("color","red");
                        a="0";
                    }
                    }
                if (!$("input[name=radioexpect]:checked").val()) {
                    //alert('Nothing is checked!');
                    $("#errexpect").html("Rate this question..").css("color","red");
                     b="1";
                   }
                if ($("input[name=radioexpect]:checked").val()) {
                    //alert('Nothing is checked!');
                    $("#errexpect").html("").css("color","red");
                     b="0";}
//                    =-=-=-=-=-=-=-=-=-=-=-=-
                if (!$("input[name=radionavigate]:checked").val()) {
                    //alert('Nothing is checked!');
                    $("#errNavigate").html("Rate this question..").css("color","red");
                     c="1";
                   }
                     if ($("input[name=radionavigate]:checked").val()) {
                    //alert('Nothing is checked!');
                    $("#errNavigate").html("").css("color","red");
                     c="0";
                   }
//                -=-====-=-=-=-=-==-=-=---=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-==-
                if (!$("input[name=radioexp]:checked").val()) {
                    //alert('Nothing is checked!');
                    $("#errExp").html("Rate this question..").css("color","red");
                     d="1";
                   }
                 if ($("input[name=radioexp]:checked").val()) {
                    //alert('Nothing is checked!');
                    $("#errExp").html("").css("color","red");
                     d="0";
                   }
//                -=-=-=-===============================---------------===========
                if (!$("input[name=radiorecommend]:checked").val()) {
                    //alert('Nothing is checked!');
                    $("#errRecommend").html("Rate this question..").css("color","red");
                     e="1";
                   }
                 if ($("input[name=radiorecommend]:checked").val()) {
                    //alert('Nothing is checked!');
                    $("#errRecommend").html("").css("color","red");
                     e="0";
                   }
//                ==--=--=--=--=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-
                 
                   
               
               
               
                if(a=="0" && b=="0"&& c=="0"&& d=="0"&&e=="0")
                    {
                        
                         var actionUrl = "ajax-feedback-backend.php?uid=" + uid + "&expect=" + expect + "&nav=" + nav +  "&exp=" + exp + "&recommend=" +recommend + "&textfeed=" +textfeed;
                    $.get(actionUrl, function(response) {
                        
                        $("#errSubmit").html(response);
                        //alert(response);
                    });
                    }
//                if ($("input[type='radio'].radioexpect").checked== false);
//                {
//                    $("#errexpect").html("Rate this question..");
//                    alert("How did this effort compare to your expectations? Rate ");
//                }
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
                    <font face="Segoe Print" size="6">Feedback :<br></font>
                    <font face="Viner Hand ITC" size="5"> “We all need people who will give us feedback. That’s how we improve.” – Bill Gates</font>
                </center>
            </div>

            <div>
                <div class="col-md-8 form-group">
                    <label for="txtUid">User ID<span class="mandatory"> *</span></label>
                    <input type="text" id="txtUid" name="txtUid" class="form-control">
                    <span id="errUid" class="form-text "></span>
                </div>
                <div class="col-md-10 offset-1 form-group" style="display:flex">
                    <label class="col-md-4 " for="radioexpect" style="width:100px;">How did this effort compare to your expectations?<span class="mandatory"> *</span></label>
                    <input type="radio" id="radioexpect1" name="radioexpect" value="1" class="form-control radioexpect">
                    <input type="radio" id="radioexpect2" name="radioexpect" value="2" class="form-control radioexpect">
                    <input type="radio" id="radioexpect3" name="radioexpect" value="3" class="form-control radioexpect">
                    <input type="radio" id="radioexpect4" name="radioexpect" value="4" class="form-control radioexpect">
                    <input type="radio" id="radioexpect5" name="radioexpect" value="5" class="form-control radioexpect">
                    <br>
                    <span id="errexpect" class="form-text "></span>
                </div>
                <div class="col-md-10 offset-1 form-group" style="display:flex">
                    <label class="col-md-4 " for="radionavigate" style="width:100px;">How easy is it to navigate our website?<span class="mandatory"> *</span></label>
                    <input type="radio" id="radionavigate1" name="radionavigate" value="1" class="form-control radionavigate">
                    <input type="radio" id="radionavigate2" name="radionavigate" value="2" class="form-control radionavigate">
                    <input type="radio" id="radionavigate3" name="radionavigate" value="3" class="form-control radionavigate">
                    <input type="radio" id="radionavigate4" name="radionavigate" value="4" class="form-control radionavigate">
                    <input type="radio" id="radionavigate5" name="radionavigate" value="5" class="form-control radionavigate">
                    <span id="errNavigate" class="form-text "></span>
                </div>
<!--
                <form>
                <div class="col-md-10 offset-1 form-group" style="display:flex">
                   
                    <label class="col-md-6" for="radiohelp">Did you find the instructions useful in <a href="#help"><span STYLE="font-family:serif;font-size:18px">Help</span> </a>tab?<span class="mandatory">*</span></label>
                    
                    
                    <input class="col-md-2" type="radio" id="radiohelpY" name="radiohelp" value="YES" class="form-control radiohelp"><span style="margin-left:-50px">YES </span>
                   

                    <input class="col-md-2" type="radio" id="radiohelpN" name="radiohelp" value="NO" class="form-control radiohelp"><span style="margin-left:-50px">NO </span>
                 
                </div>
                </form>
-->
                <div class="col-md-10 offset-1 form-group" style="display:flex">
                    <label class="col-md-4 " for="radioexp" style="width:100px;">How satisfied were you with your ticket purchasing experience?<span class="mandatory"> *</span></label>
                    <input type="radio" id="radioexp1" name="radioexp" value="1" class="form-control radioexp">
                    <input type="radio" id="radioexp2" name="radioexp" value="2" class="form-control radioexp">
                    <input type="radio" id="radioexp3" name="radioexp" value="3" class="form-control radioexp">
                    <input type="radio" id="radioexp4" name="radioexp" value="4" class="form-control radioexp">
                    <input type="radio" id="radioexp5" name="radioexp" value="5" class="form-control radioexp">
                    <span id="errExp" class="form-text "></span>
                </div>
                <form>
                <div class="col-md-10 offset-1 form-group" style="display:flex">
                    <label class="col-md-4 " for="radiorecommend" style="width:100px;">How likely is it that you would recommend this website to a friend?<span class="mandatory"> *</span></label>
                    <input type="radio" id="radiorecommend1" name="radiorecommend" value="1" class="form-control radiorecommend">
                    <input type="radio" id="radiorecommend2" name="radiorecommend" value="2" class="form-control radiorecommend">
                    <input type="radio" id="radiorecommend3" name="radiorecommend" value="3" class="form-control radiorecommend">
                    <input type="radio" id="radiorecommend4" name="radiorecommend" value="4" class="form-control radiorecommend">
                    <input type="radio" id="radiorecommend5" name="radiorecommend" value="5" class="form-control radiorecommend">
                    <span id="errRecommend" class="form-text "></span>
                </div>
                </form>
                <div class="col-md-12 form-group">
                    <lable for="txtFeed">Any other comments, questions, or concerns?</lable>
                    <input type="text" placeholder="Type..." id="txtFeed" name="txtFeed" class="form-control" style="height:100px">
                    <span id="errTxt" class="form-text " style="text-align:right"></span>
                </div>




                <div class="col-md-12 offset-5 form-group ">
                    <input type="button" id="Submit" name="btn" value="Submit" class="btn btn-success" style="width:100px">
                    <span id="errSubmit" class="form-text"></span>
                </div>
            </div>



        </div>
    </div>
</body>

</html>
