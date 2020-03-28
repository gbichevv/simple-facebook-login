<?php
require_once 'config.php';
$redirectURL = 'http://localhost/facebook_api/fb-callback.php';
$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
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
        <form>
            <input type="button" onclick="window.location = '<?php echo $loginURL; ?>'" value="Facebook Login">
        </form>
    </body>
</html>