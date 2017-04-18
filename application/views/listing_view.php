<html>

<style>
    body {
        color: black;
    }

</style>
<body>
<div class="container">
    <div class="row">

        <!-- Main Page -->
        <div class="col-md-9">
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

            <div class="row">

                <?php
                if (isset($results)) {
                    echo "<br>";
                    foreach ($results as $row) {
                        ?>
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <!-- I added the link here for the images. It's really a rough draft, but it is working on my machine. -->
                                <img src="<?php echo base_url('images/item_images/' . 'thumbnail_' . $row['image']); ?>"
                                     class="img-thumbnail" width="100px" height="100px" alt="Image not found">
                                <div>
                                    <?php
                                    ?>
                                    <h4>
                                        <?php
                                        echo $row['name'] . "<br>";
                                        ?>
                                    </h4>
                                    <p>
                                        <?php
                                        echo $row['description'] . "<br>";
                                        ?>
                                    </p>
                                    <?php
                                    echo "<div class='btn btn-primary'><a href='#'>Contact</a></div><div class='btn btn-default'><a href='#'>More Info</a></div>";
                                    echo "<br>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
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
            <!--/MainPage-->
        </div>
    </div>
</div>
</body>
</html>