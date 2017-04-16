<html>

<title>SFSUMarketplace</title>

<head>
    <h1 style="text-align: center;">
        <p style="color: black">Welcome to SFSUMarketplace!</p>
        <p style="color: black">A place to buy and sell goods with other SFSU connected people!</p>
    </h1>
</head>

<body>

    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
        }
    </style>

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo base_url()?>images/car2.jpg" alt="Chania" width="460" height="345">
                <div class="carousel-caption d-none d-md-block">
                    <h3>People will think you're</h3>
                    <p>...<i>up to something</i></p>
                </div>
            </div>

            <div class="item">
                <img src="<?php echo base_url()?>images/car1.jpg" alt="Chania" width="460" height="345">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Oi Hermione</h3>
                    <p>Yur a gurl, right?</p>
                </div>
            </div>

            <div class="item">
                <img src="<?php echo base_url()?>images/car3.jpg" alt="Flower" width="460" height="345">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Insert cool quote</h3>
                    <p>about dis website here</p>
                </div>
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

    <div id="container-me">
        <header>
            <p style="color: black">Recent Listings</p>
        </header>
        
        <!-- Each image is 350px by 233px -->
        <div class="photobanner">
            <img class="first" src="<?php echo base_url()?>images/placeholder.png" alt="" />
            <img src="<?php echo base_url()?>images/placeholder2.png" alt="" />
            <img src="<?php echo base_url()?>images/placeholder.png" alt="" />
            <img src="<?php echo base_url()?>images/placeholder2.png" alt="" />
            <img src="<?php echo base_url()?>images/placeholder.png" alt="" />
            <img src="<?php echo base_url()?>images/placeholder2.png" alt="" />
            <img src="<?php echo base_url()?>images/placeholder.png" alt="" />
            <img src="<?php echo base_url()?>images/placeholder2.png" alt="" />
            <img src="<?php echo base_url()?>images/placeholder.png" alt="" />
            <img src="<?php echo base_url()?>images/placeholder2.png" alt="" />

        </div>
    </div>



<style>

    #container-me {
        width: 1000px;
        overflow: hidden;
        margin: 10px auto 0px auto;
        background: white;
    }

    .photobanner {
        height: 233px;
        width: 3550px;
        margin-top: 10px;
    }

    .first {
        -webkit-animation: bannermove 30s linear infinite;
        -moz-animation: bannermove 30s linear infinite;
        -ms-animation: bannermove 30s linear infinite;
        -o-animation: bannermove 30s linear infinite;
        animation: bannermove 30s linear infinite;
    }

    @keyframes "bannermove" {
        0% {
            margin-left: 0px;
        }
        100% {
            margin-left: -2125px;
        }

    }

    @-moz-keyframes bannermove {
        0% {
            margin-left: 0px;
        }
        100% {
            margin-left: -2125px;
        }

    }

    @-webkit-keyframes "bannermove" {
        0% {
            margin-left: 0px;
        }
        100% {
            margin-left: -2125px;
        }

    }

    @-ms-keyframes "bannermove" {
        0% {
            margin-left: 0px;
        }
        100% {
            margin-left: -2125px;
        }

    }

    @-o-keyframes "bannermove" {
        0% {
            margin-left: 0px;
        }
        100% {
            margin-left: -2125px;
        }

    .photobanner img {
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .photobanner img:hover {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1);
        cursor: pointer;

        -webkit-box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
        -moz-box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
        box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
    }

</style>

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

