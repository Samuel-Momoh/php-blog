<?php session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<?php
$con=mysqli_connect("sql209.epizy.com","epiz_24994120","U9bJiwxMr4I");
if(!$con){
    echo " Not connected to database";
}
if(!mysqli_select_db($con,'epiz_24994120_website')){
    echo "Database not selected";
}

if(isset($_POST['update'])){
    $name = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];
    

    move_uploaded_file($temp,"blog/".$name);
    $url = "http://achile.epizy.com/admin/blog/$name";
    $title= $_POST['title'];
    $post= $_POST['post'];
     $date= $_POST['date'];



    $sql= "INSERT INTO blog (name,url,title,post,date) VALUE('$name','$url','$title','$post','$date')";
    if(!mysqli_query($con,$sql)){
        echo "not insert please try again";
    }
    else{
       $sucess="sucessfully inserted";
    }
    
}
?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<h3>Update Data</h3>

<form class="user" action="" method="POST" enctype="multipart/form-data">
   <div class="modal-body">
<h1> <?php echo $sucess ?></h1>
           <div class="form-group">
                <label>Picture</label>
                <input type="file" name="file" class="form-control"  placeholder="Picture" required>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control"  placeholder="Titile" required>
            </div>
            <div class="form-group">
                <label>Blog Post</label>
                <textarea type="text" name="post" class="form-control"  placeholder="Start writing............" required></textarea>
            </div>

              <div class="form-group">
                <label>Date</label>
                <input type="text" name="date" class="form-control"  placeholder="Date(Date Month Year)" required>
            </div>
            
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="home.php" style="text-decoration:none; color: white;">Close</a></button>
            <button type="submit" name="update" class="btn btn-primary">Save</button>
        </div>
</form>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>