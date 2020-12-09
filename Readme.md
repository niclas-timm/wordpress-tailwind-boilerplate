# WordPress Tailwind Boilerplate

This WordPress Tailwind boilerplate comes preinstalled with all necessary tools to build a custom tailwind theme from scratch. It also comes with laravel-mix for Javascript compiling.

## Getting started

In the root directory, copy and paste the `wp-config.env.example.php` and rename ist `wp-config.env.php`. Then, fill out the variables as needed. Your should now be good to go to access the website.

Afterwards, navigate to the `wp-content/themes/niclastimm` directory and execute `npm install`.

## Tailwind CSS

The niclastimm theme uses Tailwind and PostCSS. There is a custom command in the `package.json` file that compiles your tailwind css, which lives in the `src/css/main.css` file, into "normal css". To do so execute `npm run build-css`.

In order to customize your tailwind theme you will have to adjust the configuration in the `tailwind.config.js` file.

For further reference visit https://tailwindcss.com/docs

## Javascript

As we already use PostCSS with Tailwind to compile the css and we don't use scss, we do not need to configure any scss compiler. However, we still want to compile our Javascript in order to be executable in every browser. Thus, the theme comes preinstalled with `laravel-mix`, which will compile the Javascript from the `src/js/app.js` into the `dist/js/` directory. To do so, execute `npm run watch` for development or `npm run production` for production.

For further reference see https://laravel-mix.com/docs/5.0/installation
