<?php
include("dbConnection.php");
$result=mysqli_query($con,"SELECT * FROM horsedetails ORDER by id ASC");
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Horse Riding Project </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>



    <!-- <title>Hello, world!</title> -->
    <?php if(@$_GET['w'])
     {echo'<script>alert("'.@$_GET['w'].'");</script>';}
    ?>


    <script>
    function validateForm() {
        var y = document.forms["form"]["name"].value;
        var letters = /^[A-Za-z]+$/;
        if (y == null || y == "") {
            alert("Name must be filled out.");
            return false;
        }
        var z = document.forms["form"]["college"].value;
        if (z == null || z == "") {
            alert("college must be filled out.");
            return false;
        }
        var x = document.forms["form"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
            alert("Not a valid e-mail address.");
            return false;
        }
        var a = document.forms["form"]["password"].value;
        if (a == null || a == "") {
            alert("Password must be filled out");
            return false;
        }
        if (a.length < 5 || a.length > 25) {
            alert("Passwords must be 5 to 25 characters long.");
            return false;
        }
        var b = document.forms["form"]["cpassword"].value;
        if (a != b) {
            alert("Passwords must match.");
            return false;
        }
    }
    </script>
</head>



<body>
    <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo">Horse Riding</span>
            </div>
            <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}?>

            <!--sign in modal start-->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">

                    <div class="modal-content" style="width: 75%;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" style="color:red;" id="myModalLabel"><strong>Horse Details!</strong>
                            </h4>
                        </div>
                        <form action="documenttest.php" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <!-- <p>Thanks for getting in touch!</p> -->
                                <input type="file" class="custom-file-input" name="horse_image">
                                <label for="name" style="margin-top:10px;"><b>Name</b></label>
                                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md"
                                    type="text">
                                <label for="weight" style="margin-top:10px;"><b>Weight</b></label>
                                <input id="weight" name="weight" placeholder="Enter your weight"
                                    class="form-control input-md" type="text">
                                <label for="speed" style="margin-top:10px;"><b>Speed</b></label>
                                <input id="speed" name="speed" placeholder="Enter your speed"
                                    class="form-control input-md" type="text">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Horse Details</button>
                                </fieldset>
                        </form>
                    </div>
                </div>


                <!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!--sign in modal closed-->

    </div>
    <!--header row closed-->
    </div>

    <!--navigation menu-->
    <nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#"><b>Netcamp</b></a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- <li><span
                                    class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span
                                    class="sr-only">(current)</span></a></li> -->

                    <li><a href="account.php"><span class="glyphicon glyphicon-home"
                                aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="test.php"><span class="glyphicon glyphicon-home"
                                aria-hidden="true"></span>&nbsp;Slider<span class="sr-only">(current)</span></a>
                    </li>


                    <li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out"
                                aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>

                    <!-- <li <?php if(@$_GET['q']==4) echo'class="active"'; ?>><a href="account.php?q=4"><span
                                    class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Slider<span
                                    class="sr-only">(current)</span></a></li> -->
                </ul>
                <!-- <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter tag ">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"
                                aria-hidden="true"></span>&nbsp;Search</button>
                    </form> -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--navigation menu closed-->




    <style>
    * {
        box-sizing: border-box
    }

    .mySlides1,
    .mySlides2 {
        display: none
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        /* max-width: 1000px; */
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a grey background color */
    .prev:hover,
    .next:hover {
        background-color: #f1f1f1;
        color: black;
    }
    </style>



    <!-- <h2 style="text-align:center;">Horse Slideshows</h2> -->

    <!-- <p>Slideshow 1:</p> -->
    <div class="slideshow-container">
        <div class="mySlides1">
            <img src="image/himage.jpg" style="width:100%; height: 614px;">
        </div>

        <div class="mySlides1">
            <img src="image/himage2.jpg" style="width: 100%;height: 614px;">
        </div>

        <div class="mySlides1">
            <img src="image/horsebackground.jpg" style="width:100%; height: 614px;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
    </div>


    <script>
    let slideIndex = [1, 1];
    let slideId = ["mySlides1", "mySlides2"]
    showSlides(1, 0);
    showSlides(1, 1);

    function plusSlides(n, no) {
        showSlides(slideIndex[no] += n, no);
    }

    function showSlides(n, no) {
        let i;
        let x = document.getElementsByClassName(slideId[no]);
        if (n > x.length) {
            slideIndex[no] = 1
        }
        if (n < 1) {
            slideIndex[no] = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex[no] - 1].style.display = "block";
    }
    </script>





    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/himage.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/himage2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/himage.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->







    <div class="btn " style="margin-top:45px; margin-left:42%; ">
        <button type="button" class="btn btn-primary" style="background: red;" data-toggle="modal"
            data-target="#myModal">Add Horse
            Details</button>
    </div>


    <!-- `<div class="container">
        <div class="row align-items-start">
            <div class="col">
                One of three columns
            </div>
            <div class="col">
                One of three columns
            </div>
            <div class="col">
                One of three columns
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                One of three columns
            </div>
            <div class="col">
                One of three columns
            </div>
            <div class="col">
                One of three columns
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col">
                One of three columns
            </div>
            <div class="col">
                One of three columns
            </div>
            <div class="col">
                One of three columns
            </div>
        </div>
    </div>` -->

    <?php
    if(isset($_POST['submit'])){
        $image=$_POST['horse_image'];
        $name=$_POST['name'];
        $weight=$_POST['weight'];
        $speed=$_POST['speed'];

        $result=mysqli_query($con,"INSERT INTO horsedetails VALUES('', '$horse_image', '$horse_name', '$weight', '$speed')");
        if($result){
            header("location:test.php");
        }else{
            echo "Failed";
        }
    }
?>


    <?php
        $result_set = mysqli_query($con, "SELECT * FROM horsedetails");
        while($res=mysqli_fetch_array($result_set)){ ?>
    <div class="modal-body">

    </div>
    <div class="container">
        <div class="row" style=" padding: 10px; background: white; width: 46%; margin-left: -186px;">
            <div class="col-md-4">
                <img src="upload/<?php echo $res['horse_image']?>" alt="Sunny Prakash Tiwari" class="img-rounded" style=" height: 163px;
                                        width: 194px;">
            </div>
            <div class="col-md-5" style=" margin-left: 65px;">
                <a href="" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Horse
                    Name - <?php echo $res['horse_name']?></a>
                <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">Horse Weight -
                    <?php echo $res['weight']?></h4>
                <h4 style="font-family:'typo' ">Horse Speed - <?php echo $res['speed']?></h4>

                <button type="button" class="btn btn-primary" style="background:red;" data-toggle="modal"
                    data-target="#myModal">Horse
                    Details</button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
            </div>
        </div>

    </div>


    <?php } ?>






    <!--Footer start-->
    <!-- <div class="row footer" style="margin-top:20px;">
            <div class="col-md-3 box">
                <a href="http://www.projectworlds/online-examination" target="_blank">About us</a>
            </div>
            <div class="col-md-3 box">
                <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
            </div>
            <div class="col-md-3 box">
                <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
            </div>
            <div class="col-md-3 box">
                <a href="feedback.php" target="_blank">Feedback</a>
            </div>
        </div> -->
    <!-- Modal For Developers-->
    <div class="modal fade title1" id="developers">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span>
                    </h4>
                </div>

                <div class="modal-body">
                    <p>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari"
                                class="img-rounded">
                        </div>
                        <div class="col-md-5">
                            <a href="http://yugeshverma.blogspot.in"
                                style="color:#202020; font-family:'typo' ; font-size:18px"
                                title="Find on Facebook">Yugesh Verma</a>
                            <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91
                                9165063741
                            </h4>
                            <h4 style="font-family:'typo' ">vermayugesh323@gmail.com</h4>
                            <h4 style="font-family:'typo' ">Chhattishgarh insitute of management & Technology
                                ,bhilai
                            </h4>
                        </div>
                    </div>
                    </p>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Modal for admin login-->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" method="post" action="admin.php?q=index.php">
                                <div class="form-group">
                                    <label for="email"><b>Email Id</b></label>
                                    <input type="text" name="uname" maxlength="20" placeholder="Enter your email"
                                        class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="email"><b>Password</b></label>
                                    <input type="password" name="password" maxlength="15" placeholder="Password"
                                        class="form-control" />
                                </div>
                                <div class="form-group" align="center">
                                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--footer end-->

    <!-- Optional JavaScript; choose one of the     ! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>