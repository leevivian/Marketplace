<html>

<style>
    body{
        color: black;
    }

</style>
<body>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">Books</a></p>
            <p><a href="#">Clothes</a></p>
            <p><a href="#">Stuffs</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Welcome</h1>
            <p><?php
                if (isset($results))
                {
                    echo "<br>";
                    foreach ($results as $row)
                    {
                        ?>
                        <!-- I added the link here for the images. It's really a rough draft, but it is working on my machine. -->
                        <img src="<?php echo base_url('images/item_images/' . $row['image'].'-thumbnail.jpg'); ?>" class="img-thumbnail" width="100px" height="100px" alt="Image not found">
                        <?php
                        echo $row['name'] . "<br>";
                        echo $row['description'] . "<br>";
                        echo "<br>";
                    }
                }
                ?>
            </p>
            <h3>Lower section of template</h3>
            <p>You could ad some items here. Maybe. I dont know. Up to you.</p>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p>AD Spce</p>
            </div>
            <div class="well">
                <p>AD Space</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>