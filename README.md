# Vue Shortcode Plugin

A very basic plugin scaffold for creating a Wordpress plugin that loads a simple Vue application in place of a shortcode. Attributes provided to the shortcode will be passed to the root Vue component as props. Supports multiple instances of the shortcode on a page.

Uses [Laravel Mix](https://laravel-mix.com/) for compiling assets. Frontend workflow is very similar to Laravel.

## Getting Started

1. Update `vue-shortcode-plugin.php` with your desired name and shortcode.
2. `npm install` to install dependancies.
3. `npm run dev` to build or `npm run watch` to watch for changes.

## Production

1. Update `vue-shortcode-plugin.php` plugin meta
2. `npm run prod` to build dist
3. Upload to Wordpress

## Future Plans

- Implement [axios](https://github.com/axios/axios) and example of AJAX requests.
- Include Bootstrap or other CSS frameworks.
- Illustrate image handling and optimization.
- Vue CLI support..?
