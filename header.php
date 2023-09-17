<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body>

    <div class="col-12 bg-secondary-subtle">
        <div class="row mt-1 mb-1">

            <div class="offset-lg-1 col-12 col-lg-3 align-self-start mt-2">
                <?php
                if (isset($_SESSION["u"])) {
                    $session_data = $_SESSION["u"];
                ?>
                    <span class="text-lg-start"><b>Welcome </b>
                    <?php echo $session_data["fname"]." ".$session_data["lname"]; ?>
                </span> |
                    <span class="text-lg-start fw-bold" onclick="signout();">Sign Out</span> |
                <?php
                } else {
                ?>
                    <a href="index.php" class="text-decoration-none text-danger fw-bold">
                        Sign In or Register
                    </a> |
                <?php
                }
                ?>
                <span class="text-lg-start fw-bold">Help and Contact</span> |
                <span class="text-lg-start fw-bold"><a href="home.php">Home</a></span> 
            </div>

            <div class="col-12 col-lg-3 offset-lg-5 align-self-end" style="text-align: center;">
                <div class="row">

                    <div class="col-1 col-lg-3 mt-2">
                        <span class="text-start fw-bold">SELL</span>
                    </div>

                    <div class="col-12 col-lg-6 dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            My eShop
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="userProfile.php">My Profile</a></li>
                            <li><a class="dropdown-item" href="addProduct.php">Add New Product</a></li>
                            <li><a class="dropdown-item" href="#">My Sellings</a></li>
                            <li><a class="dropdown-item" href="myProducts.php">My Products</a></li>
                            <li><a class="dropdown-item" href="watchlist.php">Watchlist</a></li>
                            <li><a class="dropdown-item" href="#">Purchased History</a></li>
                            <li><a class="dropdown-item" href="#">Messages</a></li>
                            <li><a class="dropdown-item" href="#">Contact Admin</a></li>
                            <li><a class="dropdown-item" href="cart.php">Cart </a></li>
                        </ul>
                    </div>

                    <div class="col-1 col-lg-3 ms-5 ms-lg-0 mt-1 cart-icon"></div>

                </div>
            </div>

        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>