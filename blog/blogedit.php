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

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($con,"select * from blog where id='$id'"); // select query

$row = mysqli_fetch_array($qry); // fetch data
if(isset($_POST['update'])){
    $name = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];
    

    move_uploaded_file($temp,"blog/".$name);
    $url = "http://localhost/admin/blog/$name";
    $title= $_POST['title'];
     $date= $_POST['date'];
      $post= $_POST['post'];



     $edit = mysqli_query($con,"update blog  set name='$name',url='$url', tittle='$title',date='$date',post='$post' where id='$id'");
    if(!mysqli_query($con,$sql)){
        echo "not insert please try again";
    }
    else{
        $sucess="Successfully Updated";
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
         <h1> <?php echo "$sucess";?></h1>
           <div class="form-group">
                <label>Picture</label>
                <input type="file" name="file" class="form-control"  placeholder="Picture" required>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>"  placeholder="Titile" required>
            </div>
            
              <div class="form-group">
                <label>Date</label>
                <textarea type="text" name="date" class="form-control" value="<?php echo $row['post'] ?>"  placeholder="POST" required></textarea>
            </div>

              <div class="form-group">
                <label>Date</label>
                <input type="text" name="date" class="form-control" value="<?php echo $row['date'] ?>"  placeholder="Date(Date Month Year)" required>
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