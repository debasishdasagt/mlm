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
        <link rel="stylesheet" href="bootstrap/bootstrap-3.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        
        <script type="text/javascript" src="bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="margin-top: 200px">
            <div class="row">
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 loginBox">
                    <div style="color: blue; font-size:20px"><i class="bi-person-circle">fghfgh</i></div>
                    <form name="login" action="login.php" method="post">
                        <input type="text" class="form-control" name="usrid" id="usrid">
                        <input type="password" class="form-control" name="usrpass" id="usrpass">
                        <input type="submit" value="Login" class="btn-info btn-sm">
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs"></div>
            </div>
        </div>
    </body>
</html>
