<?php
/*
Plugin Name: Definition List Button
Plugin URI: http://wordpress.org/extend/plugins/definition-list
Description: Add button to rich editor that easily insert definition list element ( dl, dt, dd tags).
Version: 1.1
Author: Nick
Author URI: http://cirux.ru
License: GPL2
*/

/*
Copyright 2010  Nick  (email : jedait@mail.ru)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function deflist_addbuttons() {
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     return;

   if ( get_user_option('rich_editing') == 'true') {
     add_filter("mce_external_plugins", "add_deflist_tinymce_plugin");
     add_filter('mce_buttons', 'register_deflist_button');
     add_filter('tiny_mce_version', 'deflist_change_tinymce_version');
   }
}

function register_deflist_button($buttons) {
   array_push($buttons, "separator", "deflist");
   return $buttons;
}

function add_deflist_tinymce_plugin($plugin_array) {
   $plugin_array['deflist'] = get_bloginfo("wpurl") . "/wp-content/plugins/definition-list/button.js";
   return $plugin_array;
}

function deflist_change_tinymce_version($version) {
        return ++$version;
}

add_action('init', 'deflist_addbuttons');

?>
