<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Base theme taken from www.w3schools.com - No Copyright -->
    <title>About Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }
        p {font-size: 16px;}
        .margin {margin-bottom: 45px;}
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
        .navbar-nav  li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>
<body>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
    <h1 style="text-align:center;">SFSU Software Engineering Class</h1>
    <h1 style="text-align:center;">Spring 2017</h1>
    <h1 style="text-align:center;">Section 2</h1>
    <h1 style="text-align:center;">Team 12</h1>
</div>
<div class="container-fluid bg-2 text-center">
    <div class="btn-group-vertical">
       <a href="index.php/about/members/aculanay" class="btn btn-primary">AJ Culanay</a>
       <a href="index.php/about/members/nhoffman" class="btn btn-primary">Nick Hoffman</a>
       <a href="index.php/about/members/vlee" class="btn btn-primary">Vivian Lee</a>
       <a href="index.php/about/members/mserna" class="btn btn-primary">Matthew Serna</a>
       <a href="index.php/about/members/ssoult" class="btn btn-primary">Steven Soult</a>
        <a href="index.php/about/members/jvinter-jensen" class="btn btn-primary">Jonas Vinter-Jensen</a>
    </div>
</div>