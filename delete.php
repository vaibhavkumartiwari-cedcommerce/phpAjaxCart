<?php
session_start();
include 'config.php';

if( $_REQUEST["name"] ) {
    $name = $_REQUEST['name'];
    unset($_SESSION['cart'][$name]);
    if(count($_SESSION['cart'])>0){
    $text="<tr><th>ID</th><th>Name</th><th>Price</th><th>Quantity</th><th>Action</th></tr>";
    foreach($_SESSION['cart'] as $key => $val){ 
        
       $text.="<tr><td>".$val['id']."</td><td>".$val['name']."</td><td>".$val['price']."</td><td>".$val['qty']."</td><td><a href='#' class='delete'>Delete</a></td></tr>";

    }
   //echo(print_r($_SESSION['cart']));
    echo $text;

    }

}


















?>