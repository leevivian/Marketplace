

<html>

    <?php
    if (isset($results))
    {
        echo "<br>";
        foreach ($results as $row)
        {
            ?>
            <!-- I added the link here for the images. It's really a rough draft, but it is working on my machine. -->
            <img src="<?php echo base_url('images/item_images/' . 'thumbnail_' . $row['image_link']); ?>" class="img-thumbnail" width="100px" height="100px" alt="Image not found">
            <?php
            echo $row['name'] . "<br>";
            echo $row['description'] . "<br>";
            echo "<br>";
        }
    }
    ?>

</html>
