# Project Management System

#### Laravel Sail (Docker) installation
1. Install Docker and Docker Compose for the operating system of your choice.
2. Get into your project directory (`cd project-management-system`)
3. Build the docker containers using `./vendor/bin/sail build`
4. Run the containers using `./vendor/bin/sail up -d`
5. Access the PHP container using `./vendor/bin/sail shell`
6. Run `composer install` to install of the composer dependencies.
7. Rename the docker example `.env` file using `cp .env.docker.example .env`
8. Run `php artisan key:generate` to generate an application key (`APP_KEY`)
9. Run `php artisan migrate` to run all of the migration
10. Access the site using `localhost:8000` in your browser
11. For generating api documentation run `php artisan scribe:generate`
12. Access to the API Documentation: `localhost/docs`

#### Installation (without Docker) 
0. Install the neccessary software that Laravel, Vue and React require in order to use them (check their documentation respectively)
1. Clone the repository
2. Get into your project directory (`cd project-management-system`)
3. Run `composer install` to install of the composer dependencies.
4. Rename the docker example `.env` file using `cp .env.example .env`
5. Run `php artisan key:generate` to generate an application key (`APP_KEY`)
6. Run `php artisan migrate` to run all of the migration
7. Run `php artisan serve` to start the PHP server.
8. Access the site using `localhost:8000` in your browser 
9. For generating api documentation please run `php artisan scribe:generate`
10. Access to the API Documentation: `localhost:8000/docs`
