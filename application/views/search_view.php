<html>
<body>
<?php echo form_open('search/execute_search');?>

<form>
<input type="input" name="searchquery"/>
<input type="submit" name="submit" value="Search for Items" />
</form>

<?php

if(isset($results)){
    foreach($results as $row){

        echo $row['name']."<br>";
        echo $row['description']."<br>";
        echo "<br>";

    }
}
?>

</body>
</html>
