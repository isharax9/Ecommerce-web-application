<?php
session_start();
require "connection.php";

if(isset($_SESSION["u"])){
    if(isset($_GET["id"])){

        $email = $_SESSION["u"]["email"];
        $pid = $_GET["id"];

        $cart_rs = Database::search("SELECT * FROM `cart` WHERE `product_id`='".$pid."' AND 
                                        `users_email`='".$email."'");
        $cart_num = $cart_rs->num_rows;

        if($cart_num == 1){
            echo ("This Product Already Exists In The Cart");
        }else{
            Database::iud("INSERT INTO `cart`(`qty`,`product_id`,`users_email`) VALUES 
                        ('1','".$pid."','".$email."')");
            echo ("Product Added");
        }

    }
}

?>