<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="$1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>test</title>

    <?php
    include_once 'db.php';
    ?>

</head>
<body>
      <?php

  if(isset($_POST['save']))
{
    $sql = "INSERT INTO users (username, password, email)
    VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";

    $result = mysqli_query($con,$sql);
}

?>

    <form action="index.php" method="post"> 
<label id="first"> First name:</label><br/>
<input type="text" name="username"><br/>

<label id="first">Password</label><br/>
<input type="password" name="password"><br/>

<label id="first">Email</label><br/>
<input type="text" name="email"><br/>

<button type="submit" name="save">save</button>

</form>

<Br>
<Br>

<a href="view.php">Vezi datele introduse</a>



</body>
</html>