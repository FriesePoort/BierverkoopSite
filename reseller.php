<?php
session_start();
//print_r($_SESSION);


 if($_SESSION['Rol'] == "Reseller");
 {
        //print_r($_SESSION);
   //header('Location: index.php');
 }
 ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Scrumgroep 3</title>
    <link rel= "stylesheet" type= "text/css" href= "css/bootstrap.min.css">
    <link rel= "stylesheet" type= "text/css" href= "style.css">
    <img 
        id="headerimg"
        src="image.png">
</head>
<body>
    <div class= "contain row">
        <div class= "row">
            <div class= "com-md-6">
                <div class="jumbotron">
                        Welcome <?php echo $_SESSION['Username'];?>
</h2>

    <script type= "text/javascript" src="js.jquery.min.js"></script>
    <script type= "text/javascript" src="js.bootstrap.min.js"></script>
    <script type= "text/javascript" src="js.popper.min.js"></script>

</body>
</html>