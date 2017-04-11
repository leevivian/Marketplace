<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<div style="padding: 0px;">
    <a style="text-align: center;" href="<?php echo base_url() ?>"><h1>SFSUMarketplace</h1></a>
    <div class="col-sm-3" id="myNavbar" style="position: relative; text-align: right; width: 100%;">
        <a href="#" class="btn btn-primary">Profile</a>
        <a href="#" class="btn btn-primary">Messages</a>
        <a href="#" class="btn btn-primary">Sell</a>
        <a href="#" class="btn btn-primary">Logout</a>
    </div>

    <!-- Search Bar and Menu Buttons-->
    <div class="row">
        <div class="col-sm-8" style="position:relative; width:100%; color: black; text-align: center;">
            <div class="dropdown" name="category">

            </div>
            <?php
            $this->load->helper('form');
            echo form_open('search/execute_search'); ?>
            <form>
                <select name="Category" size="1">
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
                <input type="text" style="width:400px;" name="searchquery"/>
                <input type="submit" name="submit" value="Search for Items"/>
            </form>
        </div>

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

        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
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
<body>