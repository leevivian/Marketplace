<html>

<title>SFSUMarketplace</title>

<head>
    <h1 style="text-align: center; margin-top: 0px;">
        <p style="color: black">Welcome to SFSUMarketplace!</p>
        <p style="color: black">The online market to buy and sell goods with other SFSU connected people!</p>
    </h1>
</head>

<body>

    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
            height: 260px;
        }
    </style>

    <div class="container-carousel">

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3 style="color:black">Recent Listings</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-2 col-sm-6 hero-feature">
                <div class="thumbnail" style="min-height: 386px; max-height: 386px;">
                    <img src="<?php echo base_url()?>images/temp_images/b1.jpg" alt="" style="height: 200px">
                    <div class="caption" style="176px;">
                        <h4>CSC675 Intro to Database Systems</h4>
                        <p>$20.00</p>
                        <p>
                            <a href="<?php echo base_url()?>index.php/individual_listing" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 hero-feature">
                <div class="thumbnail" style="min-height: 386px; max-height: 386px;">
                    <img src="<?php echo base_url()?>images/temp_images/b2.jpg" alt="" style="height: 200px">
                    <div class="caption">
                        <h4>CSC415 Operating Systems</h4>
                        <p>$35.00</p>
                        <p>
                            <a href="<?php echo base_url()?>index.php/individual_listing" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 hero-feature">
                <div class="thumbnail" style="min-height: 386px; max-height: 386px;">
                    <img src="<?php echo base_url()?>images/temp_images/b3.jpg" alt="" style="height: 200px">
                    <div class="caption">
                        <h4>Harry Potter and the Half-Blood Prince</h4>
                        <p>$15.00</p>
                        <p>
                            <a href="<?php echo base_url()?>index.php/individual_listing" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 hero-feature">
                <div class="thumbnail" style="min-height: 386px; max-height: 386px;">
                    <img src="<?php echo base_url()?>images/temp_images/b4.jpg" alt="" style="height: 200px">
                    <div class="caption" style="176px;">
                        <h4>French for Dummies Audio Set</h4>
                        <p>$20.00</p>
                        <p>
                            <a href="<?php echo base_url()?>index.php/individual_listing" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 hero-feature">
                <div class="thumbnail" style="min-height: 386px; max-height: 386px;">
                    <img src="<?php echo base_url()?>images/temp_images/b5.jpg" alt="" style="height: 200px">
                    <div class="caption" style="176px;">
                        <h4>Book of Spells for Grade 5 and Above</h4>
                        <p>$20.00</p>
                        <p>
                            <a href="<?php echo base_url()?>index.php/individual_listing" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 hero-feature">
                <div class="thumbnail" style="min-height: 386px; max-height: 386px;">
                    <img src="<?php echo base_url()?>images/temp_images/b6.jpeg" alt="" style="height: 200px">
                    <div class="caption" style="176px;">
                        <h4>iPad Mini Refurbished 2017</h4>
                        <p>$200.00</p>
                        <p>
                            <a href="<?php echo base_url()?>index.php/individual_listing" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-carousel">
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
                    <a href="<?php echo base_url()?>index.php/search/category_books">
                        <img src="<?php echo base_url()?>images/banner4.jpg" alt="banner1" width="460" height="300">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Books</h3>
                        <p>...Browse textbooks and other books other students are selling!</p>
                    </div>
                </div>

                <div class="item">
                    <a href="<?php echo base_url()?>index.php/search/category_furniture">
                        <img src="<?php echo base_url()?>images/banner2.jpg" alt="banner2" width="460" height="300">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Furniture</h3>
                        <p>Get your hands on some rad furniture at low prices!</p>
                    </div>
                </div>

                <div class="item">
                    <a href="<?php echo base_url()?>index.php/search/category_electronics">
                        <img src="<?php echo base_url()?>images/banner3.jpg" alt="banner3" width="460" height="300">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Electronics</h3>
                        <p>Get the latest technology in the city!</p>
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
<style>

    .container-carousel {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }


</style>

    <?php
    /**
     * Created by PhpStorm.
     * User: Vivian
     * Date: 4/10/17
     * Time: 7:07 PM
     */

    ?>

</html>

