<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../../config.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MLM</title>
        
        
        <script src="../../js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="../../bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="../../bootstrap/bootstrap-3.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="../../bootstrap/bootstrap-icons-1.4.0/bootstrap-icons.css">
        <link rel="stylesheet" href="../../css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                
                
                <?php
include_once '../navbar.php';
?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="profile_section">
                        <div class="profile_pic"><i class="bi-person"></i></div>
                        <div class="profile_detail">test</div>
                    </div>
                    
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="carousel_section">
                        
                        
                        
                        <div id="myCarousel" class="carousel slide carousel_section" data-ride="carousel">
                        

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                              <img src="../../images/pexels-tatiana-fet-1105766.jpg" alt="Los Angeles" class="carousel_img">
                          </div>

                          <div class="item">
                            <img src="../../images/pexels-tatiana-fet-1105766.jpg" alt="Chicago" class="carousel_img">
                          </div>

                          <div class="item">
                            <img src="../../images/pexels-tatiana-fet-1105766.jpg" alt="New York" class="carousel_img">
                          </div>
                        </div>

                        <!-- Left and right controls -->
                        
                      </div>
                        
                        
                        
                    </div>
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="tile leader_tile">
                        <div class="tile_icon">
                            <i class="bi-person-circle"></i>
                        </div>
                        <div class="tile_title">
                            My Leader
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="tile sa_tile">
                        <div class="tile_icon">
                            <i class="bi-diagram-2-fill"></i>
                        </div>
                        <div class="tile_title">
                            My Direct SA
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="tile cust_tile">
                        <div class="tile_icon">
                            <i class="bi-people-fill"></i>
                        </div>
                        <div class="tile_title">
                            My Customers
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="tile add_cust_tile">
                        <div class="tile_icon">
                            <i class="bi-person-plus-fill"></i>
                        </div>
                        <div class="tile_title">
                            New Customers
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="tile wBal_tile">
                        <div class="tile_icon">
                            <i class="bi-cash"></i>
                        </div>
                        <div class="tile_title">
                            Wallet Balance
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="tile tIncome_tile">
                        <div class="tile_icon">
                            <i class="bi-cash-stack"></i>
                        </div>
                        <div class="tile_title">
                            Total Income
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
