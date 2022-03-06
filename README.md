********* Setup Project *********

Clone this repository and install the dependencies.

1. git clone https://github.com/sunilkumar4288/laravelcms.git 
2. cd <directory_name> which you have clone repo in local directory
3. composer install

Run the command below to initialize.  Do not forget to configure database details in your .env file.

1. php artisan migrate
2. php artisan db:seed

Install node and npm following one of the techniques explained in this link to create and compile the assets of the application.

$ npm install

$ npm run production

Finally, serve the application.

$ php artisan serve

Open http://localhost:8000 from your browser. To access the admin panel, hit the link http://localhost:8000/admin from your browser. 

The application comes with default admin with email address  && password

Username: admin@admin.com

password: 123456.

If you find any issue. Please feel free to contact us.

Thanks
Sunil
