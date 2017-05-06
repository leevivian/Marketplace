<html>


<body>


<div class="container">

    <!-- Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php
                if(isset($results)){
                    foreach($results as $item){
                        echo $item['name'];
                    }
                }
                ?>
                <!-- <small></small> -->
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Item Row -->
    <div class="row">

        <div class="col-md-6">
            <img class="img-responsive" src="<?php echo base_url('images/item_images/' . $item['image']); ?>" alt="">
        </div>

        <div class="col-md-4">
            <h3>About the Product</h3>
            <p>
                <?php
                if(isset($results)){
                    foreach($results as $item){
                        echo $item['description'];
                    }
                }
                ?>
            </p>
            <h3>
                <?php
                if(isset($results)){
                    foreach($results as $item){
                        echo "$" . $item['price']  ;
                    }
                }
                ?>

            </h3>

            <a href="<?php echo base_url()?>index.php/messaging" class="btn btn-default" style="width:80%; font-size: 20px; background-color: #4089d4; color: white;">Contact Seller</a>

        </div>

    </div>
    <!-- /.row -->

    <!-- Other images of the same product -->
    <div class="row">

        <div class="col-lg-12">
            <h3 class=""></h3>
        </div>
    </div>
    <!-- /.row -->

    <hr>
</body>

<style>

</style>

</html>
