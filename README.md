# Laravel 7.x Simple REST API with Google Authentication
Simple REST API with Google Authentication, developed with Laravel Framework 7.14.1.

## Resources
The API has been built with resources Users:

- The Users resource contain fields (email address, name, status)
 
## Prerequisite 

As it is build on the Laravel framework, it has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

- PHP >= 7.2.5
- MySql >= 5.7
- Composer
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension

You can check all the laravel related dependecies <a href="https://laravel.com/docs/7.x/installation#server-requirements"  target="_blank"> here </a>.

## Installation steps

Follow the bellow steps to install and set up the application.

**Step 1: Clone the Application**<br>
git clone https://github.com/yujeen/laravel-rest-api.git

or

git clone git@github.com:yujeen/laravel-rest-api.git

**Step 2: Configure the Application**<br>
After you clone the repo in to your project folder the project need to be set up by following commands-

- In terminal go to your project directory and Run 
    
        composer install 
    
- Then copy the .env.example file to .env file in the project root folder

- Edit the .env file and fill all required data for the bellow variables
    
        APP_URL=http://localhost //your app domain URL
    
        DB_HOST=127.0.0.1 // Your DB host IP or host name.
        DB_PORT=3306 //Port if you are using except the default
        DB_DATABASE=homestead
        DB_USERNAME=homestead
        DB_PASSWORD=secret
    
- To set the Application key run the bellow command in your terminal.
    
        php artisan key:generate
    
- Make your storage and bootstrapp folder writable by your application user.

- Create all the necessary tables need for the application by runing the bellow command.
    
        php artisan migrate

- Fill default data if your need by running bellow command.

        php artisan db:seed

Thats all! The application is configured now.