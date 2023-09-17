<?php

require "connection.php";

if(isset($_GET["c"])){

    $category_id = $_GET["c"];

    $categoryrs = Database::search("SELECT * FROM `brand_has_category` WHERE 
                    `category_cat_id`='".$category_id."'");

    $category_num = $categoryrs->num_rows;

    for($x = 0;$x < $category_num;$x++){

        $category_data = $categoryrs->fetch_assoc();

        $brand_rs = Database::search("SELECT * FROM `brand` WHERE 
                    `brand_id`='".$category_data["brand_brand_id"]."'");

        $brand_data = $brand_rs->fetch_assoc();

        ?>

<option value="<?php echo $brand_data["brand_id"]; ?>"><?php echo $brand_data["brand_name"]; ?></option>

        <?php

    }

}

?>