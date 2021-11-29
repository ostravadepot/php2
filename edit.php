<?php

include "db.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($con,"select * from users where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $username = $_POST['username'];
    $email = $_POST['email'];
	
    $edit = mysqli_query($con,"update users set username='$username', email='$email' where id='$id'");
	
    if($edit)
    {
        mysqli_close($con); // Close connection
        header("location:view.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="username" value="<?php echo $data['username'] ?>" placeholder="Enter username" Required>
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter email" Required>
  <input type="submit" name="update" value="Update">
</form>

<br>
<Br>
<a href="view.php">Vezi datele introduse</a>
<Br>
<a href="index.php"> Home </a>