<?php echo form_open('search/execute_search'); ?>
<div class="container-fluid bg-3 text-left">
    <form>
        <input type="text" name="searchquery"/>
        <input type="submit" name="submit" value="Search for Items"/>
    </form>

    <?php

    if (isset($results)) {
        echo "<br>";
        foreach ($results as $row) {
            ?>
            <!-- I added the link here for the images. It's really a rough draft, but it is working on my machine. -->
            <img src="<?php echo base_url('images/item_images/' . $row['image_link']); ?>" class="img-thumbnail" width="100px" height="100px" alt="Image not found">
            <?php
            echo $row['name'] . "<br>";
            echo $row['description'] . "<br>";
            echo "<br>";
        }
    }
    ?>
</div>
