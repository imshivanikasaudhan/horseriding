<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
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
    <div class="header" style="background: red;">
        <div class="row">
            <div class="col-lg-6" >
                <span class="logo">Horse Riding</span>
            </div>
            <div class="col-md-2 col-md-offset-4">
                <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span
                        class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span
                        class="title1"><b>Signin</b></span></a>
            </div>
            <!--sign in modal start-->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content title1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title title1"><span style="color:red; font-weight:900;">Log In</span></h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                                <fieldset>


                                    <!-- Text input-->
                                    <div class="form-group">

                                        <label class="col-md-3 control-label" for="email"></label>
                                        <div class="col-md-6">
                                            <input id="email" name="email" placeholder="Enter your email-id"
                                                class="form-control input-md" type="email">

                                        </div>
                                    </div>


                                    <!-- Password input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="password"></label>
                                        <div class="col-md-6">
                                            <input id="password" name="password" placeholder="Enter your Password"
                                                class="form-control input-md" type="password">

                                        </div>
                                    </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Log in</button>
                            </fieldset>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!--sign in modal closed-->

        </div>
        <!--header row closed-->
    </div>

    <div class="bg1">
        <div class="row">

            <div class="col-md-7"></div>
            <div class="col-md-4 panel" style="width: 26%;margin-left: -950px;background: transparent;">
                <!-- sign in form begins -->
                <form class="form-horizontal" name="form" action="sign.php?q=account.php" ` method="POST">
                    <fieldset>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <label for="name"><b>Name</b></label>
                                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" style="background-color:transparent;"
                                    type="text">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="mobile"></label>
                            <div class="col-md-12">
                                <label for="mobile"><b>Mobile No.</b></label>
                                <input id="mobile" name="mobile" placeholder="Enter your mobile"
                                    class="form-control input-md" style="background-color:transparent;" type="mobile">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <label for="email"><b>Email Id</b></label>
                                <input id="email" name="email" placeholder="Enter your email"
                                    class="form-control input-md" style="background-color:transparent;" type="email">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">

                                <label for="email"><b>State

                                    </b></label>
                                <!-- <select class="form-select" aria-label="Default select example">
                                    <option selected>select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select> -->
                                <input id="state" name="state" placeholder="Enter your state"
                                    class="form-control input-md" style="background-color:transparent;" type="text">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <label for="city"><b>City</b></label>
                                <input id="city" name="city" placeholder="Enter your city" class="form-control input-md"
                                style="background-color:transparent;"
                                    type="text">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <label for="pincode"><b>Pincode</b></label>
                                <input id="pincode" name="pincode" placeholder="Enter your pincode"
                                    class="form-control input-md" style="background-color:transparent;" type="pincode">

                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-12">
                                <label for="password"><b>Password</b></label>
                                <input id="password" name="password" placeholder="Enter your password"
                                    class="form-control input-md" style="background-color:transparent;" type="password">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <label for="email"><b>Confirm Password</b></label>
                                <input id="name" name="cpassword" placeholder="Enter your cconfirm password"
                                    class="form-control input-md" style="background-color:transparent;" type="password">

                            </div>
                        </div>

                        <?php if(@$_GET['q7'])
 { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for=""></label>
                            <div class="col-md-12">
                                <input type="submit" class="sub" style="background-color:red; color:white; border:0px solid; "  value="sign up"
                                    class="btn btn-primary" />
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <!--col-md-6 end-->
        </div>
    </div>
    </div>
    <!--container end-->

    <!--Footer start-->
    <div class="row footer">
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
    </div>
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
                            <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9165063741
                            </h4>
                            <h4 style="font-family:'typo' ">vermayugesh323@gmail.com</h4>
                            <h4 style="font-family:'typo' ">Chhattishgarh insitute of management & Technology ,bhilai
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


</body>

</html>