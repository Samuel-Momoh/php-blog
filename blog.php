

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="tracybeautyblend">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Tracy Beauty Blend</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
<?php
$con=mysqli_connect("sql209.epizy.com","epiz_24994120","U9bJiwxMr4I");
if(!$con){
    echo " Not connected to database";
}
if(!mysqli_select_db($con,'epiz_24994120_website')){
    echo "Database not selected";
}
?>
     <?php

$result = mysqli_query($con,"select * from details"); // fetch data from database

while($row = mysqli_fetch_array($result))
{
?>
    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p><?php echo $row['webname']; ?></p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $row['openhours']; ?></td> <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> <?php echo $row['contactdeatils']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->
     <?php
}
?>
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                         <a style=" width: 120px; height:200px; margin-top:140px;" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="./index.php">Home</a></li>
                                    <li><a href="./portfolio.php">Gallary</a></li>
                                    <li><a href="./service.php">Services</a></li>
                                    <li><a href="./about.php">About Us</a></li>
                                    <li><a href="./zoom.php">Zoom TV</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>
                                <!-- Book Icon -->
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="https://calendly.com/samueldan/60min" class="btn akame-btn">Book Now</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Our Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- News Area Start -->
    <section class="akame-news-area section-padding-0-80">
        <div class="container">
            <div class="row mx-sm-n4 akame-blog-masonary">


<?php
$result = mysqli_query($con,"select * from blog"); // fetch data from database

while($row = mysqli_fetch_array($result))
{
?>
                <!-- Single Blog Item -->
                <div class="col-12 col-sm-6 col-lg-4 px-4 akame-blog-masonary-item mb-50 wow fadeInUp" data-wow-delay="200ms">
                    <!-- Single Post Area -->
                    <div class="single-post-area">
                        <div class="post-thumbnail">
                            <a href="single.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['url']; ?>" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="single.php?id=<?php echo $row['id']; ?>" class="post-title"> <?php echo $row['title']; ?></a>
                            <div class="post-meta">
                                <a href="single.php?id=<?php echo $row['id']; ?>" class="post-date"><i class="icon_clock_alt"></i> <?php echo $row['date']; ?> </a>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
        <?php
}
?>
    

         
        </div>
        <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn akame-btn active mt-30">Load More</a>
                </div>
            </div>
    </section>
    <!-- News Area End -->

    <!-- Border -->
    <div class="container">
        <div class="border-top"></div>
    </div>

    <!-- Footer Area Start -->
 <?php
 include('footer.php')
 ?>