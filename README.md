<<<<<<< HEAD
# tartlabs-interview-task
=======
## TO CLONE THE CODE

1. Need to pull the code from git repository

2. Create new database for this project
(By default database name is mentioned .env file, you can use the same name to create db, or if you give other name while creating then you should change in .env file too)

3. Need to run 'php artisan migrate' command to create tables in database

4. Need to run 'php artisan passort:install' For creating Personal access client key.

5. Need to seed database with duplicate data for seed u have run one by one seeder separetely,

    Don't change order of below this command, Please run like mentioned below steps.
    STEPS:
    1. php artisan db:seed --class=PermissionTableSeeder
    2. php artisan db:seed --class=CreateAdminUserSeeder
    3. php artisan db:seed --class=ProductTableSeeder
    4. php artisan db:seed --class=ServiceTableSeeder
    5. php artisan db:seed --class=PurchaseTableSeeder


## TO RUN THE PROJECT

1. Once you done all the configurations then you able to run the project by using CLI, the command is

## php artisan serve

## CLI should needs to be mentioned our project folder name
## For ex:C:\xampp\htdocs\tartlabs> (Here tartlabs is our project folder name)

2. if you run this command you will get like below line
## Starting Laravel development server: http://127.0.0.1:8000

3. Copy this http url then paste in browser our project will run and display the login page

Login Credentials for admin and user:

1. Admin Credentials:

email - admin@gmail.com 
password - admin

2. User Credentials:

email - balaji@gmail.com
password - balaji
