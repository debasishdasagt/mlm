<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'config.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MLM</title>
        
        
        <script src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="bootstrap/bootstrap-3.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/bootstrap-icons-1.4.0/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
        
        
    </head>
    <body class="bground">
        <div class="container" style="margin-top: 200px">
            <div class="row">
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 loginBox">
                    <i class="bi-person-circle" style="font-size: 100px; color: aquamarine;"></i>
                    <form name="login" action="login.php" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="bi-person"></i></span>
                            <input type="text" class="form-control" name="usrid" id="usrid" placeholder="Username">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="bi-lock"></i></span>
                            <input type="password" class="form-control" name="usrpass" id="usrpass" placeholder="Password">
                        </div>
                        
                        <input type="submit" value="Login" class="btn btn-info btn-sm">
                        
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs"></div>
            </div>
        </div>
    </body>
</html>
