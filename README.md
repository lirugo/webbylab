# WebbyLab - project without framework

Web application for storing information about movies.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
Git
PHP 7.2+
Mysql 5.7
```

### Installing

A step by step series of examples that tell you how to get a development env running

Clone project

```
git clone https://github.com/lirugo/webbylab.git
```

Configure database

Specify mysql user data in file \webbylab\app\index.php

```
$GLOBALS['config'] = [
    'mysql' => [
        'host' => 'localhost',
        'database' => 'webbylab',
        'username' => 'root',
        'password' => ''
    ]
];
```

* [Dumb db](https://drive.google.com/open?id=1VH2QnS8DcL4zw6GUZLY-wcROFWZfnu3F) - And import db
* [Documentation](https://drive.google.com/file/d/1O8D6nSzpqKiyRO8CvROxXGQkwSzxEWBG/view?usp=sharing) - Download

Start PHP server

```
php -S localhost:8000
```
Open your browser
```
http://localhost:8000/app/index.php?controller=home&action=index
```

A little demo [here](https://drive.google.com/open?id=1VH2QnS8DcL4zw6GUZLY-wcROFWZfnu3F)

## Built With

* [Composer](https://getcomposer.org/) - Is an application-level package manager for the PHP
* [Smarty](https://www.smarty.net/) - Smarty is a web template system written in PHP
