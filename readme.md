# Web App and REST API Using Laravel

[![Join the chat at https://gitter.im/yajra/laravel-datatables](https://badges.gitter.im/yajra/laravel-datatables.svg)](https://gitter.im/yajra/laravel-datatables?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Donate](https://img.shields.io/badge/donate-paypal-blue.svg)](https://www.paypal.me/yajra)
[![Donate](https://img.shields.io/badge/donate-patreon-blue.svg)](https://www.patreon.com/bePatron?u=4521203)

[![Laravel 4.2|5.x](https://img.shields.io/badge/Laravel-4.2|5.x-orange.svg)](http://laravel.com)
[![Latest Stable Version](https://img.shields.io/packagist/v/yajra/laravel-datatables-oracle.svg)](https://packagist.org/packages/yajra/laravel-datatables-oracle)
[![Latest Unstable Version](https://poser.pugx.org/yajra/laravel-datatables-oracle/v/unstable.svg)](https://packagist.org/packages/yajra/laravel-datatables-oracle)
[![Build Status](https://travis-ci.org/yajra/laravel-datatables.svg?branch=master)](https://travis-ci.org/yajra/laravel-datatables)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yajra/laravel-datatables/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yajra/laravel-datatables/?branch=master)
[![Total Downloads](https://poser.pugx.org/yajra/laravel-datatables-oracle/downloads.png)](https://packagist.org/packages/yajra/laravel-datatables-oracle)
[![License](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/yajra/laravel-datatables-oracle)



## Background
This package is created to demonstrate the use of laravel framework for develping a web app and REST api. This package creates a sample student table with columns as id, code(unique), name, start_time and end_time. This package provides CRUD operations using both User Interface and API.

## Requirements
- [PHP](http://php.net/)
- [Laravel](https://laravel.com/)
- [Composer](https://getcomposer.org/)
- [NPM](https://docs.npmjs.com/cli/install)

## Dependencies
- [Bootstrap](https://getbootstrap.com/)
- [Laravel Collective](https://laravelcollective.com/)

## Quick Installation
```bash
$ composer install (install composer dependencies)
$ npm install (install all node dependencies)
$ php artisan key:generate (generate an app encryption key)
$ php artisan migrate (migrate database)
```

#### Web Application URLS
```
This app is developed using the path of virtual host (http://apidemo.io), so it might not work straighaway. Use below links to navigate without creating a virtual host OR replace (http://apidemo.io/) with (http://localhost/<foldername>/public/) in any virtual host url in this document:

Virtual Host URLs:
HomePage: http://apidemo.io/
Student List: http://apidemo.io/students
Show Student: http://apidemo.io/students/1
Create New Student Entry: http://apidemo.io/students/create

Localhost URLs:
Homepage: http://localhost/<foldername>/public/
Student List: http://localhost/<foldername>/public/students
Show Student: http://localhost/<foldername>/public/students/1
Create New Student Entry: http://localhost/<foldername>/public/students/create
About: http://localhost/<foldername>/public/about
```

#### API URLS
```
Use postman for testing API

- [Postman](https://www.getpostman.com/)

#### Create a New Student Record:
Method: POST
Base URL: http://apidemo.io/api/students
Complete URL: http://apidemo.io/api/students?code=ST011&name=Josh&startTime={{timestamp}}&endTime={{timestamp}}

#### Update the Student Record:
Method: PUT
Base URL: http://apidemo.io/api/students/{ID}
Complete URL: http://apidemo.io/api/students/15?code=ST003&name=Mike&startTime={{timestamp}}&endTime={{timestamp}}

#### Delete One Record:
Method: DELETE
URL: http://apidemo.io/api/students/{ID}

#### List All Student Records:
Method: GET
URL: http://apidemo.io/api/students/

#### Retrieve One Student Record:
Method: GET
URL: http://apidemo.io/api/students/{ID}

#### Search Records Using Partial Code and Name:
Method: GET
URL: http://apidemo.io/api/students/search/{Code}/{Name}

#### Pre-request script for generating timestamp in postman. Used for creating and updating the student record:
const moment = require('moment');
pm.globals.set("timestamp", moment().format("YYYY-MM-DD"));

Then use {{timestamp}} for passing timestamp to API

```

## Contact

If you discover any security related issues, please email [abhishekgupta07@yahoo.com](mailto:abhishekgupta07@yahoo.com).


