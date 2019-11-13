# Vue Shortcode Plugin

A basic WordPress plugin scaffold for creating a shortcode that loads a [Vue.js](https://vuejs.org/) application. Attributes provided to the shortcode will be passed to the root Vue component as props. Supports multiple instances of the shortcode on a page.

Uses [Laravel Mix](https://laravel-mix.com/) for compiling assets.

## Getting Started

1. Update `dist/vue-shortcode-plugin.php` to reflect your own plugin name
2. `npm install` to install dependancies
3. `npm run dev` or `npm run watch` to watch for changes

## Production

You can use this plugin framework in two ways. The simplest method is to simply build and then upload the contents of the `dist` directory to your plugin folder on the server.

1. `npm run prod` to build assets
2. Upload contents of `dist` folder to server

Alternatively, you may wish to be able to develop and build your plugin in place. Perhaps you develop locally and deploy your whole WordPress installation via git. You want to keep the plugin build tools in version control. You can do this by uploading the contents of the root directory rather than the `dist` directory instead.

The plugin will still activate and work as expected, you will just need to update the plugin meta at the top of the copy of `./vue-shortcode-plugin.php` located in the root directory (as opposed to the one located in `dist`).

WordPress will load the plugin from `./vue-shortcode-plugin.php` which simply requires the file `dist/vue-shortcode-plugin.php`. Just be sure that your `node_modules` directory is in your `.gitignore` and you don't commit it to vcs.

1. `npm run prod` to build assets
2. Update plugin meta in `./vue-shortcode-plugin.php`
3. Upload entire folder (without `node_modules` obviously)

## Future Plans

- Find a better way to handle the whole root vs `dist` thing
- Implement [axios](https://github.com/axios/axios) and an example of AJAX requests
- Include Bootstrap and/or other CSS frameworks
- Illustrate image handling and optimization
- Vue CLI support..?
