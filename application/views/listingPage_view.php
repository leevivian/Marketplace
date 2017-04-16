<html>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    
    <body>  
        <div class="container-fluid bg-3 text-left">
	   <?php echo form_open('search/execute_search'); ?>
            <form>
                <!-- If category is not set, set it to All. Otherwise, set it to the previously selected one -->
                <select name="Category" size="1" > 
                    <option selected value="<?php if (isset($category)){echo $category;} 
                    else {echo "All";}?>" >
                        <?php
                        if (isset($category)){echo $category;}
                        else {echo "All";}?>
                    </option>
                    <option value="All">All</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Books">Books</option>
                    <option value="Other">Other</option>
                </select>
                <input type="text" name="searchquery"/>
                <input type="submit" name="submit" value="Search for Items"/>
            </form>
    </body>
    <br>
    <br>
    <body>
        <!-- Images of selected item -->
         <div id="itemImage" style="float:left; margin:0; width:25%;">
             <h3 align="center">IMAGES</h3>
             <div style="float:left; margin:0; width:90%; border:1px solid black;">
                 <img style="height:200px; width: 100%;" src="<?php echo base_url('/images/item_images/listingImage.jpg'); ?>" class="img-thumbnail" alt="Image not found">             
             </div>
         </div>

        <!-- Description of selected item -->
         <div id="itemDescription" style="float:left; margin:0; width:50%;">
             <h3 align="center">DESCRIPTION</h3>
             <div style="float:left; margin:0; width:90%; border:1px solid black;">
                 <p>
                     Author:<br> 
                     Condition:<br> 
                     Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. 
                     Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. 
                 </p>
                 
                 <a style="float: right;" >Contact</a>
             </div>
         </div>

        <!-- Contact information of seller -->
         <div id="itemSeller" style="float:left; margin:0; width:25%">
             <h3 align="center">SELLER</h3>
             <div style="float:left; margin:0; width:90%; border:1px solid black;">
                 <img style="height:200px; width: 100%;" src="<?php echo base_url('/images/item_images/image404.jpg'); ?>" class="img-thumbnail" alt="Image not found">
                 <p style="text-align: center;">NAME</p>
                 <br>
                 <div style="text-align: center;"><input type="button" value="CONTACT"></div>
             </div>
             <br>

             
         </div>
    </div>
</body>

    <?php
    if (isset($results))
    {
        echo "<br>";
        foreach ($results as $row)
        {
            ?>
            <!-- I added the link here for the images. It's really a rough draft, but it is working on my machine. -->
            <a href="<?php echo base_url('/index.php/search/load_description'); ?>">
                <img src="<?php echo base_url('images/item_images/' . $row['image_link']); ?>" class="img-thumbnail" width="100px" height="100px" alt="Image not found">
            </a>
            <?php
            echo $row['name'] . "<br>";
            echo $row['description'] . "<br>";
            echo "<br>";
        }
    }
    ?>
</div>
</html>
