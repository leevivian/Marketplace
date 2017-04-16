<html>

<title>SFSUMarketplace</title>

<head>
    <h1 style="text-align: center;">
        <p style="color: black">Welcome to SFSUMarketplace!</p>
        <p style="color: black">A place to buy and sell goods with other SFSU connected people!</p>
    </h1>
</head>

<body>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
        }
    </style>

<div class="container">
    <br>
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

