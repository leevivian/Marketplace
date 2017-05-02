<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<title>SFSUMarketplace</title>

<nav class="navbar navbar-default" role="navigation" >
    <div class="navbar-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand2" href="<?php echo base_url() ?>index.php/home"><img src="<?php echo base_url() ?>images/logo.png" style="height: 45px;"></a>
        </div>

        <!-- Search Bar and Menu Buttons-->
        <div id="searchdiv" class="row" >
            <div class="col-sm-8" style="bottom: 10px; position:relative;  width:100%; color: black; text-align: center; padding-top: 10px; padding-bottom: 10px;">
                <div class="dropdown" name="category">

                </div>
                <?php
                $this->load->helper('form');
                echo form_open('search/execute_search');
                ?>
                <form>
                    <select style="height: 28px;" class="myselect" name="Condition" size="1">
                        <option selected value="<?php
                        if (isset($category)) {
                            echo $category;
                        } else {
                            echo "New";
                        }
                        ?>">
                                    <?php
                                    if (isset($category)) {
                                        echo $category;
                                    } else {
                                        echo "New";
                                    }
                                    ?>
                        </option>
                        <option value="New">New</option>
                        <option value="Old">Old</option>
                        <option value="Refurbished">Refurbished</option>
                    </select>
                    <select style="height: 28px;" name="Category" size="1">
                        <option selected value="<?php
                        if (isset($category)) {
                            echo $category;
                        } else {
                            echo "All";
                        }
                        ?>">
                                    <?php
                                    if (isset($category)) {
                                        echo $category;
                                    } else {
                                        echo "All";
                                    }
                                    ?>
                        </option>
                        <option value="All">All</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Books">Books</option>
                        <option value="Other">Other</option>
                    </select>
                    <input id="searchfield" type="text"  name="searchquery"/>
                    <input type="submit" name="submit" value="Search"/>
                </form>
            </div>
        </div>
        
   
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" style="width: auto;" >

            <ul class="nav navbar-nav" id="navbtns" >
                <div class="btn-group" role="group" aria-label="...">
                    <!--Sell-->
                    <a id="sell" class="btn btn btn-success" href="<?php echo base_url() ?>index.php/upload_item">Sell</a></button>
                    <!--Messaging-->
                    <a id="messaging" href="<?php echo base_url() ?>index.php/messaging" type="button" class="btn btn btn-default">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </a>
                    <div class="btn-group" role="group">
                        <!--My Account-->
                        <button id="myaccount" type="button" class="btn btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() ?>index.php/dashboard">Dashboard</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url() ?>index.php/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div><!-- /.navbar-collapse  -->
    </div>
</nav>


    <style>
        /*Collapse navbar at 
        @media (max-width: 1200px) {
            .navbar-header {
                float: none;
            }
            .navbar-toggle {
                display: block;
            }
            .navbar-collapse {
                border-top: 1px solid transparent;
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
            }
            .navbar-collapse.collapse {
                display: none!important;
            }
            .navbar-nav {
                float: none!important;
                margin: 7.5px -15px;
            }
            .navbar-nav>li {
                float: none;
            }
            .navbar-nav>li>a {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }*/

        
        #searchdiv {
            left: 185px;
            position: fixed;
            top: 16px;
            z-index: 999;
            width: 100%;
            /*margin: 0px auto;*/
            display: inline-block; 
            width: 60%;
            /*style="display:inline-block; margin: 0 auto; width: 51%; "*/
        }
        
        .navbar-fluid {
            margin-right: auto;
            margin-left: auto;
            width: 95%;
        }

        .navbar-brand2 {
            float: left;
            height: 50px;
            /* padding: 15px 15px; */
            font-size: 18px;
            line-height: 20px;
        }

        .myselect{
            height: 5px;
        }
    </style>




  


<!-- This file contains all the necessary links and information for a standard web page in our project. Bootstrap, fonts
     and jquery are loaded. It also has the different backgrounds we are using for the site. This will be loaded by
     the controller as the head part of a page, along with the opening body tag. The footer file will close the body.-->

<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script>
        /*$('#myaccount').on('hidden.bs.collapse', function (e) {
            document.getElementById("demo").innerHTML = e.currentTarget.id;
        })*/
        
    //For testing
    /*$(document).ready(function(){
        $("#hide").click(function(){
            document.getElementById("demo").innerHTML = "$( window ).width() )";
        });
    });*/
    
    $('#viewport').html($(window).width());

    $(window).resize(function () {
        var viewportWidth = $(window).width();
        $('#viewport').html(viewportWidth + "px");
    });
           
    function setSearchfieldLength() {
        var w = $(window).width();
        //768px: Default collapse width for bootstrap
        if(w<916){
            $("#searchfield").css('width', 50);
            //document.getElementById("demo").innerHTML = w;
        }
        else if (w>=916 && w<1072){
            $("#searchfield").css('width', '30%');
            //document.getElementById("demo").innerHTML = w;
        }
        else if(w>=1072){
            $("#searchfield").css('width', '40%');
            //document.getElementById("demo").innerHTML = w;
        }   
    }
   
    $(window).ready(setSearchfieldLength);
    $(window).load(setSearchfieldLength);
    $(window).resize(setSearchfieldLength);
        
    </script>
    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #3e3f40;
        }

        p {
            font-size: 16px;
        }

        .margin {
            margin-bottom: 45px;
        }

        .bg-1 {
            background-color: #1abc9c; /* Green */
            color: #ffffff;
        }

        .bg-2 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }

        .bg-3 {
            background-color: #ffffff; /* White */
            color: #555555;
        }
        
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }

        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }

        .navbar-nav li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>


<!-- Messages Page header
<body>
    <div class="navbar bg-4 text-right" >
        <a href="<?php echo base_url();?>index.php"><h1 style="text-align:center;">SFSU Marketplace</h1></a>
        <a href="<?php echo base_url();?>index.php/messaging" class="btn btn-primary">Check Mail</a>
    </div>

-->