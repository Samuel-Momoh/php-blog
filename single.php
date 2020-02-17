
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
include('header.php'); 
?>
<?php
$id = $_GET['id']; // get id through query string

$qry = mysqli_query($con,"select * from blog where id='$id'"); // select query

$row = mysqli_fetch_array($qry); // fetch data
$row['url'];
$row['title'];
$row['post'];
$row['date'];
?>
   <!-- Blog Details Area Start -->
    <section class="akame-blog-details-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#" class="post-date"><i class="icon_clock_alt"></i><?php echo$row['date']; ?></a>
                            <a href="#" class="post-comments"><i class="icon_chat_alt"></i></a>
                        </div>
                        <h2 class="post-title"><?php echo $row['title']; ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="post-thumbnail mb-50">
                        <img style=" width: 50%; height:50%; margin:auto;padding-  " src="<?php echo $row['url'] ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                    <!-- Post Share -->
                 
                </div>

                <div class="row justify-content-center">
                    <div class="blog-details-text">
                        <p ><?php echo $row['post']; ?></p>

                    </div>
</div>
                    <!-- Post Author Area -->

                    <!-- Leave A Reply -->
                    <div class="akame-contact-form mt-50">
                        <h4 class="mb-5">Leave a comment:</h4>

                        <!-- Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="message" class="form-control mb-30" placeholder="Start the discussion..."></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn akame-btn btn-3 mt-15">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Area End -->

    <!-- Related News Area Start -->
    <section class="akame-blog-area bg-gray section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Latest News From Our blog</h2>
                        
                    </div>
                </div>
            </div>

            <div class="row">
<?php
$result = mysqli_query($con,"select * from feature"); // fetch data from database

while($row = mysqli_fetch_array($result))
{
?>
                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-80">
                        <div class="post-thumbnail">
                            <a href="<?php echo $row['link']; ?>"><img src="<?php echo $row['url']; ?>" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title"><?php echo $row['title']; ?></a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> <?php echo $row['date']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
      <?php
}
?>
<?php
$result = mysqli_query($con,"select * from feature2"); // fetch data from database

while($row = mysqli_fetch_array($result))
{
?>
                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-80">
                        <div class="post-thumbnail">
                            <a href="<?php echo $row['link']; ?>"><img src="<?php echo $row['url']; ?>" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="<?php echo $row['link']; ?>" class="post-title"><?php echo $row['title']; ?></a>
                            <div class="post-meta">
                                <a href="<?php echo $row['link']; ?>" class="post-date"><i class="icon_clock_alt"></i> <?php echo $row['date']; ?></a>
                    
                            </div>
         
                        </div>
                    </div>
                </div>
     <?php
}
?>
<?php
$result = mysqli_query($con,"select * from feature3"); // fetch data from database

while($row = mysqli_fetch_array($result))
{
?>
                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-80">
                        <div class="post-thumbnail">
                            <a href="<?php echo $row['link']; ?>"><img src="<?php echo $row['url']; ?>" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title"><?php echo $row['title']; ?></a>
                            <div class="post-meta">
                                <a href="<?php echo $row['link']; ?>" class="post-date"><i class="icon_clock_alt"></i>  <?php echo $row['date']; ?></a>
                         
                            </div>
            
                        </div>
                    </div>
                </div>
     <?php
}
?>
            </div>
        </div>
    </section>
    <!-- Related News Area End -->         
</form>









<?php

include('footer.php');
?>