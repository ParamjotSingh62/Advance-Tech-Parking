<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 50%;
            margin-bottom: 16px;
            padding: 0 10px;
        }

        .card {
            box-shadow: 10px 10px 20px black;
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
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
                <font face="Malgun Gothic" color="white" size="5"></font>
            </a>
           <div style=" margin-left: auto">
                <a class="btn btn-primary float-left" style=" width:130px" href="dashboard.php"><i class="fa fa-home" style="font-size: 20px" aria-hidden="true"></i> Home</a>
                <a class="btn btn-light float-left" href="instruction.php" style="margin-left: 5px; width:165px"><img src="pics/instruction.png" height="25px" width="50px" style="margin-top:-5px">Instructions</a>
                <a class="btn btn-info float-left" href="aboutus.php" style="margin-left: 5px; width:150px"><i class="fa fa-address-card" style="font-size: 20px" aria-hidden="true"></i> Contact Us</a>
            </div>


        </nav> </div>
    <div class="about-section">
        <h1 style="font-size: 50px;">Know Our <span style="color: black">Team</span></h1>
        
        <p style="font-size: 20px;">We are 3rd year students pursuing BE at Thapar University.</p>

    </div>
    <br><br>
    <div class="container">
        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Tushar Taneja</h2>
                    <p class="title">Team Member</p>
                    <p><a href="mailto:ttaneja_be18@thapar.edu">ttaneja_be18@thapar.edu</a></p>
                    <p><a href="tel:7889074220"><button class="button">Contact</button></a></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Paramjot Singh</h2>
                    <p class="title">Core Team Member</p>
                    <p><a href="mailto:psingh6_be18@thapar.edu">psingh6_be18@thapar.edu</a></p>
                    <p><a href="tel:9463578662"><button class="button">Contact</button></a></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Lovely Chind</h2>
                    <p class="title">Team Member</p>
                    <p><a href="mailto:llovely50_be19@thapar.edu">llovely50_be19@thapar.edu</a></p>
                   <p><a href="tel:7347257523"><button class="button">Contact</button></a></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Sakshi Sharma</h2>
                    <p class="title">Team Member</p>
                    <p><a href="mailto:ssharma50_be19@thapar.edu">ssharma50_be19@thapar.edu</a></p>
                   <p><a href="tel:7889273602"><button class="button">Contact</button></a></p>
                </div>
            </div>
        </div>
    </div>
   
</body>

</html>
