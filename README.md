## Quick Start:

Clone this repository and install the dependencies.

    $ git clone https://github.com/munazzil4/cms && cd cms
    $ composer install ignore-platform-reqs
    $ php artisan key:generate
    $ copy .env.example and rename with that for .env and replace mysql database credentials.

Run the command below to initialize. Do not forget to configure your .env file. 

    $ php artisan cms:initialize --seed

Run the command below to initialize node and npm.
    
    $ npm install
    $ npm run production

Finally, serve the application.

    $ php artisan serve

Open [http://localhost:8000](http://localhost:8000) from your browser. 
To access the admin panel, hit the link 
[http://localhost:8000/admin](http://localhost:8000/admin) from your browser.
The application comes with default user with email address `admin@admin.com` and `123456`.

-----
