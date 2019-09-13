<?php
add_filter( 'walker_nav_menu_start_el', 'bc_add_subpage_toggle',10,4);
function bc_add_subpage_toggle( $output, $item, $depth, $args ){
//Only add class to 'top level' items on the 'primary' menu.
if('main-navigation' == $args->theme_location && $depth === 0 ){
    if (in_array("menu-item-has-children", $item->classes)) {
        $output .='<span class="menu-item-has-children--toggle"><span class="icon-arrow-down"></span></span>';
    }
}
return $output;
}