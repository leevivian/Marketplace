<html>

<style>
    body {
        color: black;
    }

</style>
<body>
<div class="container-fluid text-center">
    <div class="row content">

        <!-- Main Page -->
        <div class="row content">
            <!-- Header -->
            <h1>Search Results Found <?php
                echo count($results);
                ?> Items</h1>

            <!-- Listing Content -->
            <div class="col-sm-8 page-content col-thin-left">
                <div class="category-list">
                    <div class="tab-box ">

                        <!--Sorting Function -->
                        <div class="tab-filter">
                            <div class="selecter select-short-by closed" tabindex="0"><select
                                        class="selectpicker selecter-element" data-style="btn-select" data-width="auto"
                                        tabindex="-1">
                                    <option value="Sort by">Sort by</option>
                                    <option value="Price: Low to High">Price: Low to High</option>
                                    <option value="Price: High to Low">Price: High to Low</option>
                                </select></div>
                        </div>

                        <div class="menu-overly-mask"></div>
                    </div>
                </div>

            </div>

            <!-- Containers -->
            <div class="row">
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">First Product</a>
                            </h4>
                            <p>See more snippets like this online store item at <a target="_blank"
                                                                                   href="http://www.bootsnipp.com">Bootsnipp
                                    - http://bootsnipp.com</a>.</p>
                        </div>
                        <div class="btn btn-primary">Contact</div>
                        <div class="btn btn-default">More Info</div>
                    </div>
                </div>
            </div>
            <!-- /Containers -->

            <div class="row">
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <?php
                    if (isset($results)) {
                        echo "<br>";
                        foreach ($results as $row) {
                            ?>
                            <div class="thumbnail">
                                <!-- I added the link here for the images. It's really a rough draft, but it is working on my machine. -->
                                <img src="<?php echo base_url('images/item_images/' . 'thumbnail_' . $row['image']); ?>"
                                     class="img-thumbnail" width="100px" height="100px" alt="Image not found">
                            </div>
                            <?php
                            echo $row['name'] . "<br>";
                            echo $row['description'] . "<br>";
                            echo "<div class='caption'><a href='#' class='btn btn-primary'>Message</a></div><div class='caption'><a href='#' class='btn btn-default'>More Info</a></div>";
                            echo "\n\n\n";
                            echo "<br>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <!--Pagination-->
        <div class="pagination-bar text-center">
            <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"> ...</a></li>
                <li><a class="pagination-btn" href="#">Next »</a></li>
            </ul>
        </div>

        <!--Promo Ad-->
        <div class="post-promo text-center">
            <h2> Do you have anything to sell ? </h2>
            <h5>Sell your products online for free! Just register, post, meetup, and earn cash!</h5>
            <a href="<?php echo base_url() ?>index.php/upload_item"
               class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a>
        </div>

    </div>
    <!--/MainPage-->
</div>
</div>
</body>
</html>