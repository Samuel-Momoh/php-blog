<?php
$con=mysqli_connect("sql209.epizy.com","epiz_24994120","U9bJiwxMr4I");
if(!$con){
    echo " Not connected to database";
}
if(!mysqli_select_db($con,'epiz_24994120_website')){
    echo "Database not selected";
}
$id = $_GET['id']; // get id through query string

$del = mysqli_query($con,"delete from blog where id = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:blogview.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>