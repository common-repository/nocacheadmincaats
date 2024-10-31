<?php
/* start added to the ADMIN bar menu */
function add_mihalica_admin_bar_link() {
global $wp_admin_bar;
if ( !is_super_admin() || !is_admin_bar_showing() )
return;
$wp_admin_bar->add_menu( array(
'id' => 'add_my_my',                     // Can be any value and must be unique
'title' => __( 'МЕНЮ КОНСОЛИ'),          // The display title in the Menu
'href' => __('/wp-admin/'),
));
// To add submenu links to similar
$wp_admin_bar->add_menu( array(
'parent' => 'add_my_my',                // Can be any value and must be unique
'id'     => 'view_ats_svodca_plagov',   // Unique identifier of the parent menu
'title' => __( 'смотреть ATs плагины'), // The display title in the Menu
'href' => __('/wp-admin/plugin-install.php?s=+ATs.M&tab=search&type=term'),
));
// To add submenu links to similar
$wp_admin_bar->add_menu( array(
'parent' => 'add_my_my',               // Can be any value and must be unique
'id'     => 'view_ats_plagy',
'title' => __( 'мои плагины'),
'href' => __('/wp-admin/plugins.php'),
));
$wp_admin_bar->add_menu( array(
'parent' => 'add_my_my',               // Unique identifier of the parent menu
'id'     => 'view_ats_ops',
'title' => __( 'ОПЦИИ WP'),
'href' => __('/wp-admin/options.php'),
));
}
add_action('admin_bar_menu', 'add_mihalica_admin_bar_link',35);
/* fin added to the ADMIN bar menu */