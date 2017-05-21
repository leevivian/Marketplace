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
            <a class="navbar-brand2" href="<?php echo base_url() ?>index.php/home">
                <img src="<?php echo base_url() ?>images/logo.png"></a>
        </div>

        <!-- Search Bar and Menu Buttons-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >

            <div style="margin: 0px auto; width: 100%; ">
                <ul class="nav navbar-nav navbar-right" style="padding-top: 9px;">
                    <div class="btn-group" role="group" aria-label="...">
                        <!--Sell-->
                        <a class="btn btn btn-success" href="<?php echo base_url() ?>index.php/upload_item">Sell</a></button>
                        <!--Messaging-->
                        <a href="<?php echo base_url() ?>index.php/messaging" type="button" class="btn btn btn-default">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        </a>
                        <div class="btn-group" role="group">
                            <!--My Account-->
                            <button type="button" class="btn btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Account
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() ?>index.php/dashboard">Dashboard</a></li>
                                <li role="separator" class="divider"></li>

                                <!-- I added this block of code to change the login button to logout when the user is currently logged in. -->
                                <?php if(isset($this->session->login) && $this->session->login) : ?>
                                    <li><a href="<?php echo base_url()?>index.php/login/logout">Logout</a></li>
                                <?php else : ?>
                                    <li><a href="<?php echo base_url()?>index.php/login">Login</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </ul>
                <div style="position:relative;  width:80%; color: black; text-align: center; padding-top: 10px;">
                    <div class="dropdown" name="category">

                    </div>
                    <?php
                    $this->load->helper('form');
                    echo form_open('search/execute_search');
                    ?>
                    <form>
                        <!-- Dropdown for condition -->
                        <select name="Condition" size="1" style="width: auto; height: 28px;">
                            <option selected="selected" value="Any">Select Condition</option>
                            <option value="Any"<?php echo set_select('Condition', 'Any'); ?> >Any</option>
                            <option value="Brand New" <?php echo set_select('Condition', 'Brand New'); ?> >Brand New</option>
                            <option value="Like New" <?php echo set_select('Condition', 'Like New'); ?> >Like New</option>
                            <option value="Good" <?php echo set_select('Condition', 'Good'); ?> >Good</option>
                            <option value="Acceptable" <?php echo set_select('Condition', 'Acceptable'); ?> >Acceptable</option>
                        </select>

                        <!-- Dropdown for category -->
                        <select name="Category" size="1" style="height: 28px;">

                            <option selected="selected" value="All">Select Category</option>
                            <option value="All" <?php echo set_select('Category', 'All'); ?> >All</option>
                            <option value="Books" <?php echo set_select('Category', 'Books'); ?>>Books</option>
                            <option value="Furniture" <?php echo set_select('Category', 'Furniture'); ?>>Furniture</option>
                            <option value="Electronics" <?php echo set_select('Category', 'Electronics'); ?>>Electronics</option>
                            <option value="Clothing" <?php echo set_select('Category', 'Clothing'); ?>>Clothing</option>
                            <option value="Other" <?php echo set_select('Category', 'Other'); ?>>Other</option>
                        </select>
                        <input type="text" value="<?php echo set_value('searchquery')?>" style="width: 40%;" name="searchquery"/>
                        <input style="display: inline-block;" type="submit" name="submit" value="Search"/>
                    </form>
                </div>
            </div>

        </div><!-- /.navbar-collapse  -->
    </div>
</nav>

<style>

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
