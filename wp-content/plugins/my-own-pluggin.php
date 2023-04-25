<?php
/*
Plugin Name: Sale trick
Plugin URI: https://www.example.com
Description: Adds a sail trick message to the product page.
Version: 1.0
Author: Sara Pellnor
Author URI: https://www.example.com
*/

// Ett plugin med ett kundmedelande med fri frakt om du handlar för mer än 500 kr. 
function custom_message()
{
?>
    <div style="background-color: pink; text-align: center;">
        <h3>Fri frakt om du handlar för mer än 500 kr</h3>
    </div>
<?php

}
add_action("woocommerce_before_main_content", 'custom_message');

?>