# hodler-energy-mining-pool

Dashboard for the Hodler Energy Mining Pool using the Laravel Framework.

---

Laravel Installation:

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
