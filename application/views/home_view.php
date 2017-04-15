<html>

    <style>
        /* Photo Banner */
        .container {
            width: 100%;
            overflow: hidden;
            margin: 0px auto;
            background: white;
        }

        .photobanner, .photobanner2 {
            height: 233px;
            width: 3550px;
            margin-bottom: 5px;
            font-size: 0;
        }

        .photobanner img, .photobanner2 img {
            margin-bottom: 10px;
            margin-right: 5px;
            height: 180px;
            width: 180px;
        }

        .photobanner img  {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        .photobanner img:hover {
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2);
            cursor: pointer;

            -webkit-box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
            -moz-box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
            box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
        }


        /*keyframe animations*/
        .first {
            -webkit-animation: bannermove 30s linear infinite;
            -moz-animation: bannermove 30s linear infinite;
            -ms-animation: bannermove 30s linear infinite;
            -o-animation: bannermove 30s linear infinite;
            animation: bannermove 30s linear infinite;
        }

        @keyframes "bannermove" {
            0% {margin-left: 0px;}
            100% {margin-left: -2130px;}
        }

        @-moz-keyframes bannermove {
            0% {margin-left: 0px;}
            100% {margin-left: -2130px;}
        }

        @-webkit-keyframes "bannermove" {
            0% {margin-left: 0px;}
            100% {margin-left: -2130px;}
        }

        @-ms-keyframes "bannermove" {
            0% {margin-left: 0px;}
            100% {margin-left: -2130px;}
        }

        @-o-keyframes "bannermove" {
            0% {margin-left: 0px;}
            100% {margin-left: -2130px;}
        }

        .second {
            -webkit-animation: bannermoves 30s linear infinite;
            -moz-animation: bannermoves 30s linear infinite;
            -ms-animation: bannermoves 30s linear infinite;
            -o-animation: bannermoves 30s linear infinite;
            animation: bannermoves 30s linear infinite;
        }

        @keyframes "bannermoves" {
            0% {margin-left: -2130px;}
            100% {margin-left: 0px;}
        }

        @-moz-keyframes bannermoves {
            0% {margin-left: -2130px;}
            100% {margin-left: 0px;}
        }

        @-webkit-keyframes "bannermoves" {
            0% {margin-left: -2130px;}
            100% {margin-left: 0px;}
        }

        @-ms-keyframes "bannermoves" {
            0% {margin-left: -2130px;}
            100% {margin-left: 0px;}
        }

        @-o-keyframes "bannermoves" {
            0% {margin-left: -2130px;}
            100% {margin-left: 0px;}
        }
    </style>


<title>SFSUMarketplace</title>
    <head>
        <h1 style="text-align: center;">
            <p>Welcome to SFSUMarketplace!</p>
            <p>A place to buy and sell goods with other SFSU connected people!</p>
        </h1>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 750px;
                height: 380px;
                margin: auto;
            }
        </style>
    </head>
    <body>

    <div class="container" style="padding-bottom: 30px;">
        <br>
        <div id="myCarousel" class="carousel slide" style="width: 750px; margin:auto;" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <!-- <img src="http://localhost:8888/images/c1.jpg" alt="Picture" width="350" height="350"> -->
                    <img src="http://sfsuse.com/~vlee1/images/c1.jpg" alt="Picture" width="460" height="350">
                </div>

                <div class="item">
                    <img src="http://sfsuse.com/~vlee1/images/c2.jpg" alt="Chania" width="460" height="350">
                </div>

                <div class="item">
                    <img src="http://sfsuse.com/~vlee1/images/c3.jpg" alt="Flower" width="460" height="350">
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="photobanner">
            <img class="first" src="http://sfsuse.com/~vlee1/images/placeholder.png">
            <img src="http://sfsuse.com/~vlee1/images/placeholder.png">
            <img src="http://sfsuse.com/~vlee1/images/placeholder2.png">
            <img src="http://sfsuse.com/~vlee1/images/placeholder.png">
            <img src="http://sfsuse.com/~vlee1/images/placeholder2.png">
            <img src="http://sfsuse.com/~vlee1/images/placeholder.png">
            <img src="http://sfsuse.com/~vlee1/images/placeholder2.png">
            <img src="http://sfsuse.com/~vlee1/images/placeholder.png">
            <img src="http://sfsuse.com/~vlee1/images/placeholder2.png">
            <img src="http://sfsuse.com/~vlee1/images/placeholder.png">
            <img src="http://sfsuse.com/~vlee1/images/placeholder2.png">
        </div>

    </div>

    </body>

    <?php
    /**
     * Created by PhpStorm.
     * User: Vivian
     * Date: 4/10/17
     * Time: 7:07 PM
     */

    ?>

</html>

