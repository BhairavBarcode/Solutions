<?php
    function OpenCon()
     {
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "1234";
     $db = "example";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
       

     add_filter( 'woocommerce_cart_item_name', 'wpamit_product_image_at_checkout',9999,3);

function wpamit_product_image_at_checkout( $name, $cart_item, $cart_item_key ) {
if ( ! is_checkout() ) return $name;
$product = $cart_item['data'];
$thumbnail = $product->get_image( array( '100', '100' ), array( 'class' => 'alignleft' ) );
return $thumbnail.$name;
}
    ?>