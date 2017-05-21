<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title>SFSUMarketplace</title>

    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand2" href="http://sfsuse.com/~vlee1/index.php/home" style="padding-left: 10px;">
                    <img src="http://sfsuse.com/~vlee1/images/logo.png" style="height: 45px;"></a>
            </div>

            <!-- Search Bar and Menu Buttons-->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <div style="margin: 0px auto;width: 96%;">
                    <ul class="nav navbar-nav navbar-right" style="padding-top: 9px;">
                        <div class="btn-group" role="group" aria-label="..." style="">
                            <!--Sell-->
                            <a class="btn btn btn-success"
                               href="http://sfsuse.com/~vlee1/index.php/upload_item">Sell</a>
                            <!--Messaging-->
                            <a href="http://sfsuse.com/~vlee1/index.php/messaging" type="button"
                               class="btn btn btn-default">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            </a>
                            <div class="btn-group" role="group">
                                <!--My Account-->
                                <button type="button" class="btn btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    My Account
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="http://sfsuse.com/~vlee1/index.php/dashboard">Dashboard</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="http://sfsuse.com/~vlee1/index.php/login/logout">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                    <div style="position:relative;width: 80%;color: black;text-align: center;padding-top: 10px;">
                        <div class="dropdown" name="category">

                        </div>
                        <form action="http://sfsuse.com/~vlee1/index.php/search/execute_search" method="post"
                              accept-charset="utf-8">
                            <input type="hidden" name="csrf_test_name" value="d362d0088ed24d7355fe37322e02558e">

                            <!-- Dropdown for condition -->
                            <select name="Condition" size="1" style="width: auto; height: 28px;">
                                <option selected="selected" value="Any">Select Condition</option>
                                <option value="Any">Any</option>
                                <option value="Brand New">Brand New</option>
                                <option value="Like New">Like New</option>
                                <option value="Good">Good</option>
                                <option value="Acceptable">Acceptable</option>
                            </select>

                            <!-- Dropdown for category -->
                            <select name="Category" size="1" style="height: 28px;">

                                <option selected="selected" value="All">Select Category</option>
                                <option value="All">All</option>
                                <option value="Books">Books</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Clothing">Clothing</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type="text" value="" style="width: 45%;" name="searchquery">
                            <input style="display: inline-block;" type="submit" name="submit" value="Search">
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
            font-size: 18px;
            line-height: 20px;
        }

        .myselect {
            height: 5px;
        }
    </style>

    <!-- This file contains all the necessary links and information for a standard web page in our project. Bootstrap, fonts
         and jquery are loaded. It also has the different backgrounds we are using for the site. This will be loaded by
         the controller as the head part of a page, along with the opening body tag. The footer file will close the body.-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://sfsuse.com/~vlee1/assets/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="http://sfsuse.com/~vlee1/assets/js/jquery-3.1.1.min.js"></script>
    <script src="http://sfsuse.com/~vlee1/assets/js/bootstrap.min.js"></script>
    <script>

        $('#viewport').html($(window).width());

        $(window).resize(function () {
            var viewportWidth = $(window).width();
            $('#viewport').html(viewportWidth + "px");
        });

        function setSearchfieldLength() {
            var w = $(window).width();
            //768px: Default collapse width for bootstrap
            if (w < 916) {
                $("#searchfield").css('width', 50);
                //document.getElementById("demo").innerHTML = w;
            }
            else if (w >= 916 && w < 1072) {
                $("#searchfield").css('width', '30%');
                //document.getElementById("demo").innerHTML = w;
            }
            else if (w >= 1072) {
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