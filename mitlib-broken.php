<?php
/**
 * Plugin Name:   MITlib Broken Plugin
 * Plugin URI:    https://github.com/MITLibraries/mitlib-broken
 * Description:   A broken WordPress plugin
 * Version:       0.0.1
 * Author:        MIT Libraries
 * Author URI:    https://github.com/MITLibraries
 * Licence:       GPL2
 *
 * @package MITlib Broken
 * @author MIT Libraries
 * @link https://github.com/MITLibraries/mitlib-broken
 */

namespace mitlib;

// Don't call the file directly!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

throw new Exception('This is broken.');
