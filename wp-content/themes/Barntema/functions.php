<?php 
// add_action funktion som lägger till en div med en h3a till alla produkter på singel_product_summary
function my_function() {
    ?>
    <div style="background-color: red; text-align: center; ">
        <h3 style="color:white;">REA</h3>
    </div>
<?php
}
add_action("woocommerce_single_product_summary","my_function");
 
// remove_action som tar bort sidebaren på checkout-sidan. 
function remove_shopstore_page_container_end() {
    $page = get_page_uri();
    
    if ( $page == "checkout") {
    remove_action( 'shopstore_page_container_end', 'shopstore_page_container_sidebar', 20 );
    };
}
add_action( 'wp_enqueue_scripts', 'remove_shopstore_page_container_end', 100 );