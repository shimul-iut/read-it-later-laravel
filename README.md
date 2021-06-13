To install please follow the below steps:

- Prepare environment
```
 sudo apt-get update
 sudo apt-get install apache2 libapache2-mod-php7.2 php7.2 php7.2-xml php7.2-gd php7.2-opcache php7.2-mbstring php7.2-sqlite3 composer
 ```
- Clone repo :
 ```
 git clone https://github.com/shimul-iut/read-it-later-laravel.git
 ```
- Rename `.env.example` file to `.env`inside your project root and fill the database information.
- Change `app\config\database.php` configs accordingly
- Open the console and cd your project root directory
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders (I have seeded few pre-created users).
- Run `php artisan serve`

#####You can now access your project at localhost:8000 :)

Notes:

1. I have taken the libertry to throw ```User Model``` in the Pocket-Content relationship to make the whole architecture look more compact. Although I have left out the User Authentication Part

2. I missed the part where it was suggested to use ```Homestead/Sail```. Therefore, I followed basic installation.

3. There is a demo video where you can watch (In case the installation is failed for some reason) the whole project running in my dev environment. 
Here is the link : https://drive.google.com/file/d/1BoJVzYLLvXX8qq4x0Labf_B3H--aFz0i/view

```
