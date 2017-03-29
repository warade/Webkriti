<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--google font-->
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <!--footer stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="font-family: Lobster;">
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" id="slidingmenu">
                <li class="sidebar-brand" style="margin-bottom: 60px;">
                    <a href="#" style="font-size: 40px;">
                        Menu
                    </a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="events.php">Events</a>
                </li>
                <li>
                    <a href="contacts.html">About Us</a>
                </li>
                <li>
                    <a href="about.html">About IIITM</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" id="menu-toggle" style="color: white;"><img src="images/menulogo.jpg" id="menuLogo"></a>
                    </div>
                </div>
            </div>
        </div>
     <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <div class="mainContent">
        

    <div class="container" id="gallery_slideinsexy">
            <div class="carousel slide" data-ride="carousel" id="carousel-ex">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-ex" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-ex" data-slide-to="1"></li>
                    <li data-target="#carousel-ex" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" style="font-family: Georgia;">
                    <div class="item active">
                        <img src="images/robotics.jpg" alt="image" class="gallery_image">
                        <div class="carousel-caption" >
                            <h2>Robowars</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/gamiacs.jpg" alt="image" class="gallery_image">
                        <div class="carousel-caption" class="event_info">
                            <h2>Gamiacs</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/coding2.jpg" alt="image" class="gallery_image">
                        <div class="carousel-caption" class="event_info">
                            <h2>Programming Competition</h2>
                        </div>
                    </div>
                    <a href="#carousel-ex" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#carousel-ex" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>




        
        <header>
            <h1>About Programming Contest....</h1>
        </header>
        <p class="paragraph">
           A. General 
            A.1. These rules are modified version of the World Cyber Games official Counter-Strike 2010 rules.
             A.2. Game version: Counter-Strike (Steam) 
            A.3. Competition method: 5 vs. 5
 A.4. Final tournament phases 4.1. BYOC-qualifier (Round Robin – 1 match against each opponent in 0group and single elimination playoffs, best of 1, until we have 2 qualified teams) 4.2. Main tournament - Group stage (Round Robin – 1 match against each opponent in group). 4.3. Main tournament - Playoffs (Single elimination, best of 3 matches)

        </p>
        <header>
            <h1>Rulers And Regulation</h1>
        </header>
        <p class="paragraph">
            ROBOWARS Task: Design and construct a remote controlled robot capable of fighting a one on one tournament. Specifications:     
            <ol class="paragraph">
            <li>
               •    Individuals or teams of up to three people will be allowed to compete. All contestants are required to present a valid student identification card.
            </li>
            <li>
                •   Contestants cannot bring any notes or textbooks to the contest room. Blank sheets of paper and pencils will be supplied.
            </li>
            <li>
                •   Contestants in the same team can discuss the problems they are assigned. However, they should do so in a quiet way and without disturbing contestants in other teams.
            </li>
            <li>
                •   Referees will be assigned to observe teams throughout the contest and report any problems and/or violations of the rules to the Contest Committee.
            </li>
        </ol>
        </p>
        <header>
            <h1>Venue</h1>
        </header>
        <p class="paragraph">
            PMC, near visitor's Hostel, iiitm Gwalior.<br>
            Timing: 8pm.
        </p>
        <header>
            <div class="paragraph">
                <img src="images/prize.png" style="width: 520px; height: 200px;">
            </div>
        </header>
        <div style="text-align: center;">
             <?php 
                    require 'coreinc.php';
                    $db=mysqli_connect("localhost","root","","usrinfo");
                    if(isset($_SESSION['id']))
                    {
                    
                    if(!empty($_SESSION['id']))

                    {
                    $i=$_SESSION['id'];
                    $query="SELECT ev3 FROM users WHERE id='$i'";
                    $res=mysqli_query($db,$query);
                    if($res){
                    $ev1=mysqli_fetch_assoc($res);
                    if($ev1['ev3']){
                        $r=1;
                    }
                    else
                    {
                        $r=0;
                    }
                    }
                    }
                    }
                    else 
                    {
                        $r=0;
                    }



            ?>
            <?php if(!$r) { ?>
                <form action="vv3.php" meathod="POST">             
                    <button type="submit" class="btn btn-primary" id="button" style="margin-top: 20px;"> Register! </button>
                </form>
            <?php } ?>
            <?php if($r) { ?>
                <button type="button" class="btn btn-primary" id="button" style="margin-top: 20px;"> Registered </button>
            <?php } ?>   
        </div>
    </div>


    </div>







<!--footer-->
<div class="footer two">
                    <h3>Keep Connected</h3>
                    <ul>
                        <li><a class="fb" href="#"><i></i>Like us on Facebook</a></li>
                        <li><a class="fb1" href="#"><i></i>Follow us on Twitter</a></li>
                        <li><a class="fb2" href="#"><i></i>Add us on Google Plus</a></li>
                        <li><a class="fb3" href="#"><i></i>Follow us on Dribbble</a></li>
                    </ul>
                </div>
<footer class="mainFooter">
<img src="images/logo copy.png" style="height: 80px; width: 80px;"><br>
    <span class="glyphicon glyphicon-check"></span>
        All rights reserved By Technocrest&copy;2016.
</footer>








        <!--modal-->
<div class="modal fade" id="abc">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title" style="text-align: center; font-style: Georgia; font-size: 20px;">Log in!</h>
                     </div>
                     <div class="modal-body">
                        <form action="conn.php" method="POST">
                            UserName:<br><input type="text" name="username" id="element-3" class="form-control input-lg" placeholder="Enter Name"><br>
                            Password:<br><input type="password" name="password" id="element-3" class="form-control input-lg" placeholder="Enter password"><br>
                        
                     </div>

                     <div class="modal-footer">
                     
                        <a href="" class="btn btn-default" data-dismiss="modal">Close</a>
                        <input type="Submit" value="Next" class="btn btn-primary">
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>

<video autoplay  poster="" id="bgvid" loop> 
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->

  
<source src="assets/video/bgvid.mp4" type="video/mp4">
</video>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


<!--video background-->

</body>

</html>
