<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo $_SESSION['userData']['id'] ?>
        <?php echo $_SESSION['userData']['first_name'] ?>
        <?php echo $_SESSION['userData']['email'] ?>
        <?php echo $_SESSION['userData']['picture']['url'] ?>
    </body>
</html>
