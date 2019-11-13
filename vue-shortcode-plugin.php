<?php
/*
Plugin Name: Vue Shortcode Plugin
Plugin URI: https://jamiebaker.com.au
description: Plugin framework to load a Vue app in place of a shortcode.
Version: 1.0.0
Author: Jamie Baker
Author URI: http://jamiebaker.com.au
License: All Rights Reserved

This file is just a simple loader for the contents of the 'dist' directory.
You might use this if you wanted to build the plugin in place on the server.
See the README for more information.

Otherwise, you should ignore this file and upload the 'dist' directory instead.
*/

require_once(dirname(__FILE__) . "/dist/vue-shortcode-plugin.php");
