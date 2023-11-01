<?php

session_start();

require "connection.php";

?>

<!DOCTYPE html>

<html>

<head>

    <title>Home | mkshop</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resourses/logo.svg" />

</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <?php include "header.php"; ?>

            <hr />

            <div class="col-12 justify-content-center">
                <div class="row mb-3">

                    <div class="offset-4 offset-lg-1 col-4 col-lg-1 logo" style="height: 60px;"></div>

                    <div class="col-12 col-lg-6">

                        <div class="input-group mb-3 mt-3">
                            <input type="text" id="kw" class="form-control" aria-label="Text input with dropdown button" />

                            <select class="form-select" style="max-width: 250px;" id="c">
                                <option value="0">All Categories</option>

                                <?php

                                $category_rs = Database::search("SELECT * FROM `category`");
                                $category_num = $category_rs->num_rows;

                                for ($x = 0; $x < $category_num; $x++) {

                                    $category_data = $category_rs->fetch_assoc();

                                ?>

                                    <option value="<?php echo $category_data["cat_id"]; ?>">
                                        <?php echo $category_data["cat_name"]; ?>
                                    </option>

                                <?php

                                }

                                ?>

                            </select>

                        </div>

                    </div>

                    <div class="col-12 col-lg-2 d-grid">
                        <button class="btn btn-primary mt-3 mb-3" onclick="basicSearch(0);">Search</button>
                    </div>

                    <div class="col-12 col-lg-2 mt-2 mt-lg-4 text-center text-lg-start">
                        <a href="advancedSearch.php" class="text-decoration-none link-secondary fw-bold">Advanced</a>
                    </div>

                </div>
            </div>

            <hr />

            <div class="col-12" id="basicSearchResult">
                <div class="row">

                    <!-- Carousel -->

                    <div id="carouselExampleCaptions" class="offset-2 col-8 carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="1000">
                                <img src="resourses/slider images/posterimg.jpg" class="d-block poster-img-1" />
                                <div class="carousel-caption d-none d-md-block poster-caption">
                                    <h5 class="poster-title">Welcome to mkshop</h5>
                                    <p class="poster-txt">The World's Best Online Store By One Click.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="resourses/slider images/posterimg2.jpg" class="d-block poster-img-1" />
                            </div>
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="resourses/slider images/posterimg3.jpg" class="d-block poster-img-1" />
                                <div class="carousel-caption d-none d-md-block poster-caption-1">
                                    <h5 class="poster-title">Be Free.....</h5>
                                    <p class="poster-txt">Experience the Lowest Delivery Costs With Us.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- Carousel -->

                    <?php

                    $c_rs = Database::search("SELECT * FROM `category`");
                    $c_num = $c_rs->num_rows;

                    for ($y = 0; $y < $c_num; $y++) {

                        $c_data = $c_rs->fetch_assoc();

                    ?>

                        <!-- category names -->
                        <div class="col-12 mt-3 mb-3">
                            <a href="#" class="text-decoration-none text-dark fs-3 fw-bold">
                                <?php echo $c_data["cat_name"]; ?>
                            </a>&nbsp;&nbsp;
                            <a href="#" class="text-decoration-none text-dark fs-6">See All &nbsp;&rarr;</a>
                        </div>
                        <!-- category names -->
                        <!-- products -->
                        <div class="col-12 mb-3">
                            <div class="row border border-primary">

                                <div class="col-12">
                                    <div class="row justify-content-center gap-2">

                                        <?php

                                        $product_rs = Database::search("SELECT * FROM `product` WHERE 
                                    `category_cat_id`='" . $c_data['cat_id'] . "' AND `status_status_id`='1' ORDER BY 
                                    `datetime_added` DESC LIMIT 4 OFFSET 0");

                                        $product_num = $product_rs->num_rows;

                                        for ($x = 0; $x < $product_num; $x++) {
                                            $product_data = $product_rs->fetch_assoc();

                                        ?>

                                            <div class="card col-12 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                <?php

                                                $img_rs = Database::search("SELECT * FROM `product_img` WHERE 
                                            `product_id`='" . $product_data['id'] . "'");

                                                $img_data = $img_rs->fetch_assoc();

                                                ?>

                                                <img src="<?php echo $img_data["img_path"]; ?>" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fw-bold fs-6"><?php echo $product_data["title"]; ?></h5>
                                                    <span class="badge rounded-pill text-bg-info">New</span><br />
                                                    <span class="card-text text-primary">Rs. <?php echo $product_data["price"]; ?> .00</span><br />
                                                    <span class="card-text text-warning fw-bold">In Stock</span><br />
                                                    <span class="card-text text-success fw-bold"><?php echo $product_data["qty"]; ?> Items Available</span><br />
                                                    <a href="<?php echo "singleProductView.php?id=". ($product_data["id"]); ?>" class="col-12 btn btn-success">Buy Now</a>
                                                    <button class="col-12 btn btn-dark mt-2" onclick="addToCart(<?php echo $product_data['id'];?>);">
                                                        <i class="bi bi-cart4 text-white fs-5"></i>
                                                    </button>
                                                    <button onclick="addToWatchlist(<?php echo $product_data['id'];?>);" class="col-12 btn btn-outline-light mt-2 border border-primary">
                                                        <i class="bi bi-heart-fill text-dark fs-5"></i>
                                                    </button>
                                                </div>
                                            </div>

                                        <?php

                                        }

                                        ?>



                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- products -->

                    <?php

                    }

                    ?>

                </div>
            </div>

            <?php include "footer.php"; ?>

        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>