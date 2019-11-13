<?php
/*
Plugin Name: Vue Shortcode Plugin
Plugin URI: https://jamiebaker.com.au
description: Plugin framework to load a Vue app in place of a shortcode.
Version: 1.0.0
Author: Jamie Baker
Author URI: http://jamiebaker.com.au
License: All Rights Reserved
*/

class Vue_Shortcode_Plugin
{
    static $instance = false;
    private $name = "vue-shortcode-plugin";
    private $version = "1.0.0";
    private $shortcode = "vue_shortcode_plugin";

    private function __construct()
    {
        add_shortcode($this->shortcode, [$this, "render"]);
        add_action("wp_enqueue_scripts", [$this, "enqueue"], 10);
    }

    public static function get()
    {
        // enforce the singleton pattern
        if (!self::$instance) self::$instance = new self;
        return self::$instance;
    }

    public function enqueue()
    {
        // only continue if the post contains the shortcode
        global $post;
        if (!has_shortcode($post->post_content, $this->shortcode)) return;

        // load dependancies
        wp_enqueue_script("vue", "https://cdn.jsdelivr.net/npm/vue@2.6.0/dist/vue.js", [], "2.6.10");

        // load plugin styles and scripts
        wp_enqueue_style($this->name, plugin_dir_url(__FILE__) . "css/app.css", [], $this->version);
        wp_enqueue_script($this->name, plugin_dir_url(__FILE__) . "js/app.js", ["vue"], $this->version, true);

        // add plugin name to window so we can reference it in app.js
        wp_localize_script($this->name, 'plugin', $this->name);

        // add the ajax url to window so we can use it for ajax requests
        wp_localize_script($this->name, 'ajaxurl', admin_url('admin-ajax.php'));
    }

    public function render($atts)
    {
        // get the atts passed from the shortcode and escape
        $atts = esc_attr(json_encode($atts));

        // output the container and root component for vue app
        return "<div class='{$this->name}-container'><app-component :atts='{$atts}'></app-component></div>";
    }
}

/**
 * This is a global function to return this singleton class. 
 * You can use this function in your other classes or plugins 
 * to access properties and methods on this class. Example:
 * 
 * VUE_SP()->property
 */
function VUE_SP()
{
    return Vue_Shortcode_Plugin::get();
}

// start the plugin
VUE_SP();
