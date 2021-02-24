<?php

/**
 * Plugin Name:       Cedcoss Shortcode Plugins
 * Plugin URI:        https://example.com/plugins/meta-box/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            CEDCOSS
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
?>

<?php 


define('OWT_SHORTCODE_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__) );

 
// This is simple base shortcode 
/*
// This do_shortcode execute php file with shortcone name 
// add_shortcode("owt-tag","shortcode_function_php_file");
function shortcode_function_php_file()
{
  include OWT_SHORTCODE_PLUGIN_DIR_PATH.'/wp-view/wp-shortcode-content.php';
}

// this is arguments based shortcode 
/*  add_shortcode("myshortcode_args","shortcode_function_args");
function shortcode_function_args($attributes)
{ 
  echo "<h5>Arguments based shortcode</h5>";
  echo "<pre>";
  print_r($attributes);
  echo "</pre>";
  echo "<hr>";
  // include OWT_SHORTCODE_PLUGIN_DIR_PATH.'/wp-view/wp-shortcode-content.php';
}

// Retrive the values with shortcode  
add_shortcode("myshortcode_args_retrive","shortcode_function_args_retrive");

function shortcode_function_args_retrive($attributes)
{
  echo "<h5>Arguments based shortcode and retive </h5>";
  echo "</br> My name is = ".$attributes['name'];
  echo "</br> My Address is = ".$attributes['address'];
  echo "<hr>";
}

/*
  * creata first a hook 
  * create function for making dynamic link 
  * this is tag base shortcode
*/


// Add contact form using shortcode
add_shortcode("contact_form","contact_form_shortcode_function");

function contact_form_shortcode_function($attributes)
{
  return '<form action="/action_page.php">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" placeholder="Enter your name" value=""><br>
            <label for="email">Enter mail:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your mail" value=""><br> 
            <label for="message">Enter Message:</label><br>
            <input type="textarea" id="message" name="message" placeholder="Enter your name" value=""><br><br>
            <input type="submit" value="Submit">
          </form>';
}



?> 