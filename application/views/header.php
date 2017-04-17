<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<title>SFSUMarketplace</title>


<nav class="navbar navbar-default">
    <div class="navbar-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="btn btn-default" href="<?php echo base_url()?>index.php/home"><img src="<?php echo base_url()?>images/logo.png" style="height: 45px;"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default"><a style="height: 10px;" href="<?php echo base_url()?>index.php/upload_item">Sell</a></button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </button>

                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>index.php/dashboard">Dashboard</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url()?>index.php/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>


    <style>
        .navbar-fluid {
            margin-right: auto;
            margin-left: auto;
            width: 90%;
        }
    </style>

</nav>


    <!-- Search Bar and Menu Buttons-->
    <div class="row">
        <div class="col-sm-8" style="background-color: #757575 ; bottom: 10px; position:relative; width:100%; color: black; text-align: center; padding-top: 10px; padding-bottom: 10px;">
            <div class="dropdown" name="category">

            </div>
            <?php
            $this->load->helper('form');
            echo form_open('search/execute_search'); ?>
            <form>
                <select name="Category" size="1" style="height: 40px;">
                    <option selected value="<?php if (isset($category)) {
                        echo $category;
                    } else {
                        echo "All";
                    } ?>">
                        <?php
                        if (isset($category)) {
                            echo $category;
                        } else {
                            echo "All";
                        } ?>
                    </option>
                    <option value="All">All</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Books">Books</option>
                    <option value="Other">Other</option>
                </select>
                <input type="text" style="width: 50%;" name="searchquery"/>
                <input type="submit" name="submit" value="Search"/>
            </form>
        </div>
    </div>


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
    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
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