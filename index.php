<?php 
/*
    Created By: Piyush Garg
*/

$user_name = $_GET['user_input'];
$find = $_GET['find'];
$replace = $_GET['replace'];

$new_string = str_ireplace($find,$replace,$user_name);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piyush's App</title>
</head>
<body>
    <form action="index.php" method="GET">
    <h3>Type A Simple Text or a Paragraph here</h3>
    <textarea name="user_input" rows="10" cols="75" style="font-family:comic sans ms"  style="font-size: 60px" style="color:#003399">
    <?php echo $new_string ?>
    </textarea>
    <br>
    <h3>Search For:</h3>
    <input type="text" name="find">
    <h3>Replace With:</h3>
    <input type="text" name="replace">
    <input id type="submit">
    </form><br><Br>
    <h3 id="piyush">Created By: Piyush Garg</h3>
  <center> 
      <a href="https://www.instagram.com/piyush_codes/" target="__blank">
       <img src="https://www.logolynx.com/images/logolynx/be/bec6730898204460b562eb8203e4287a.png" height="40px">
</a>
    </center>


</body>
</html>
