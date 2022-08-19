<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php echo "<h1>WELCOME ". $_SESSION['username']. "</h1>"; ?>
    </body>
</html>

