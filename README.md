PHP Test Application
============

A basic PHP application using Composer (https://getcomposer.org/) and the Slim Framework (http://www.slimframework.com/).

Originally designed to be a headless web service, the demo page (/demo) was added to do basic test functionality. The index page shows a list of web service calls that can be expanded and used by a common front end for building a basic health check/status page.

Getting Started
============

Update Composer by running the following command
```php composer.phar self-update```

Update the installed packages or install them in the first place by running
```php composer.phar install```

This app loads an ini file located at (/etc/phpstack.ini) and connects to a database with those credentials (only on /demo) and provides a green/red indicator if the connection work and displays the MySQL Version.

Sample phpstack.ini
```
[Database]
host = localhost
username = php_demo_user
password = password
db_name = php_demo
```
