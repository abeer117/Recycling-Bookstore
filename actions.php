<?php
    include 'config.php';


// COOKIE  CODE

    // add products to cart
if(isset($_POST['addCart'])){
    $p_id = $_POST['addCart'];
    
    if(isset($_COOKIE['user_cart'])){
        $user_cart = json_decode($_COOKIE['user_cart']);
    }else{
        $user_cart = [];
    }
    if(!in_array($p_id,$user_cart)){
        array_push($user_cart,$p_id);
    }
    
    $cart_count = count($user_cart);
    $u_cart = json_encode($user_cart);

    if(setcookie('user_cart',$u_cart,time() + (1000),'/','','',TRUE)){
        setcookie('cart_count',$cart_count,time() + (1000),'/','','',TRUE);
        echo 'cookie set successfully';
    }else{
        echo 'false';
    }
}

