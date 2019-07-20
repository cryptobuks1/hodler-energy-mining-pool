# hodler-energy-mining-pool

Dashboard for the Hodler Energy Mining Pool using the Laravel Framework.

---

Laravel Installation:

Gull Laravel Version
If you want to build your next Project Using Laravel, Then Gull-laravel Version Is Good Choice For you. There is Two Laravel Version included (1.Laravel starter kit and 2.Laravel full Verison) . You can start with what ever you prefer and get all the features available in the Gull Html Version .Its Fresh and Updated Laravel version(Laravel 5.7) with all features and assets. You can either take the parts you want and integrate them into your current project Or You can follow these stpes to make the Gull-Laravel working.
Server Requirement

The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

    PHP >= 7.1.3
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension
    Ctype PHP Extension
    JSON PHP Extension
    BCMath PHP Extension

Installation Steps:

    composer install
    npm install

    Now Need Rename the .env.example to .env

    php artisan key:generate

Now Need some Laravel Commands

    php artisan serve
    Serves your project
    npm run watch
    Watches your files and compiles your assets on the fly (also auto reloads your browser)
    npm run dev
    Compiles your assets
    npm run prod
    Compiles and prepares your assets for production


---

SASS/CSS & Theming Guide

Root style files:

    lite-purple
    lite-blue

These files are located in src/assets/styles/sass/themes

Open lite-purple.scss (Location: src/assets/styles/sass/themes/lite-purple.scss) and and change the color variables

Sass files are compiled and strored in src/assets/styles/css
Color variables

    primary
    secondary
    success
    warning
    info
    danger
    light
    dark

For more about theming, visit https://getbootstrap.com/docs/4.1/getting-started/theming/#theme-colors

---


Background color

    .bg-primary
    .bg-success
    .bg-warning
    .bg-danger
    .bg-light
    .bg-dark


Color

    .text-primary
    .text-success
    .text-warning
    .text-danger
    .text-light
    .text-dark

Margins

    .m-0
    .m-0
    .mt-1
    .mr-1
    .mb-1
    .ml-1
    .mb-05

Paddings

    .pt-1
    .pr-1
    .pb-1
    .pl-1
    .p-0

---
