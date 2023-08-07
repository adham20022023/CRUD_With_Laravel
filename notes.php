<?php
//! What is Laravel ?
/**
 * Laravel is a web application framework with expressive, elegant syntax.
 * allowing you to focus on creating something amazing while we take care of the details
 * provide thorough dependency injection,and expressive database abstraction layer
 */
//! how to Create a new project in Laravel 2 ways ?
//? composer create-project laravel/laravel example-app
/**
 * https://github.com/laravel/laravel => you will find framework here
 * composer => is a dependency management allows you to declare the libraries and packages your project depends on and manages their installation.
 * create-project => is a command allows you to declare the libraries and packages your project depends on and manages their installation.
 * laravel/laravel => the package name used to create new project
 * example-app => The name of the project You will Create
*/
//? composer global require laravel/installer
//? laravel new example-app
/**
 * global require This Mean you Can use this package anywhere in your system terminal
 */
//! How To start Local server in Laravel ?
//? directory for your project => cd example-app
//? run this Command php artisan serve
// go to your local host http://127.0.0.1:8000/
//!Laravel & Docker
/*
Docker is a tool for running applications and services in small,
light-weight "containers" which do not interfere with your local machine's installed software or configuration.
This means you don't have to worry about configuring or setting up complicated development tools such as web servers and databases on your local machine.
To get started, you only need to install Docker Desktop.
*/
//! Initial configuration
/**
 * path => config/app.php file
 * it contain  contains several options such as timezone and locale that you may wish to change according to your application.
 */
//!Environment Based Configuration
/**
 * .env file => The purpose of this file is to separate sensitive or environment-specific information from your codebase and provide a way to configure your application depending on the environment it is running in.
 * When deploying your application to different environments, you simply need to update the .env file to reflect the appropriate settings for each environment.
 */
//!Databases & Migrations
/**
 * By default, your application's
 * .env configuration file specifies that Laravel will be interacting with a MySQL database and will access the database at 127.0.0.1.
 * If you are developing on macOS and need to install MySQL, Postgres, or Redis locally,
 * you may find it convenient to utilize DBngin.
 */
//! Directory Configuration
/**
 * laravel should always served out of the root of web directory configured
 * You should not attempt to serve a Laravel application out of a subdirectory of the "web directory"
 */





?>
