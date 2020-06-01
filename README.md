## General info
This project is Geographic information system using Laravel and Google Maps Api

## Image

![image](https://user-images.githubusercontent.com/38047246/78897567-961a1500-7a9c-11ea-9250-e2a666799474.png)

![image](https://user-images.githubusercontent.com/38047246/78909424-b30b1400-7aad-11ea-9cd7-549193c1fcd1.png)

![image](https://user-images.githubusercontent.com/38047246/83380256-b6fd4780-a407-11ea-93b6-094f8248070e.png)

![image](https://user-images.githubusercontent.com/38047246/78911408-77257e00-7ab0-11ea-94b5-57a5f81989ea.png)

![image](https://user-images.githubusercontent.com/38047246/78897466-69fe9400-7a9c-11ea-907f-cc71129ef1fa.png)

## Technologies
Project is created with:
* Composer version: V1.9.1
* PHP version: v7.4.0
	
## Setup
To run this project, install it locally using npm:

``` bash
# clone the repo
$ git clone https://github.com/anonymousliem/WebGis-Aplication-Laravel.git my-project

# go into app's directory
$ cd my-project

# install app's dependencies
$ composer install

# install app's dependencies
$ npm install

```

## Setup Your Google Maps API

replace <YOUR_API_KEY> with your google maps api-key in '...\resources\views\map_view.blade.php'


## If you choice to use MySQL

Copy file ".env.example", and change its name to ".env".
Then in file ".env" complete this database configuration:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=<YOUR_DATABASE_NAME>
* DB_USERNAME=<YOUR_DATABASE_USERNAME>
* DB_PASSWORD=<YOUR_DATABASE_PASSWORD>

## Set APP_URL

> If your project url looks like: example.com/sub-folder 
Then go to `my-project/.env`
And modify this line:

* APP_URL = 

To make it look like this:

* APP_URL = http://example.com/sub-folder

## Next step

``` bash
# in your app directory
# generate laravel APP_KEY
$ php artisan key:generate

# run database migration and seed
$ php artisan migrate:refresh --seed

# generate mixing
$ npm run dev

# and repeat generate mixing
$ npm run dev
```

## Usage

``` bash
# start local server
$ php artisan serve
``` 

## What's included

Within the download you'll find the following directories and files, logically grouping common assets and providing both compiled and minified variations. You'll see something like this:


```
├── public/          #static files
│   ├── uploads/      #your upload file will save in this directory
│   └── index.html   #html template
│
|__ app/Http/Controller #configuration controller
|
|
├── routes/             #config route
│   
│__ resources/views     #code view
|
|
└── package.json
|
|__ composer.json
```

## Features
in this system any 3 role : admin, operator, user
* Admin and user can create, read, update, delete Maps from table
* Admin and user can add, delete marker from maps
* Admin and user can draw polygon in maps and can download file .geojson from polygon
* Admin and user can export table from maps table to excel
* Admin and user can upload file csv to insert in database
* Admin and operator can create, read, delete account
* Admin and user can create polygon from maps
* Admin and user can create, read, update, detele polygon from table

## Info
if you want to show data from geojson, you can drag and drop your geojson file to https://developers.google.com/maps/documentation/javascript/examples/layer-data-dragndrop
<br>
<br>
open folder '../samplefiles' to get .sql or if you want to use sample file
<br>
> list User
* admin -> admin@gmail.com, password : admin
* operator -> operator.com, password : operator
* user -> user@gmail.com, password : user
