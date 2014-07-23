PHP Test Application
============

A basic PHP application using Composer (https://getcomposer.org/) and the Slim Framework (http://www.slimframework.com/).

Originally designed to be a headless web service, the main page currently does a sample connection to MySQL and prints the version. The checks page (/checks) shows a list of web service calls that can be expanded and used by a common front end for building a basic health check/status page.

Getting Started
============

Update Composer by running the following command
```php composer.phar self-update```

Update the installed packages or install them in the first place by running
```php composer.phar install```

This app loads an ini file located at (/etc/phpstack.ini) and connects to a database with those credentials (only on /demo) and provides a green/red indicator if the connection work and displays the MySQL Version.

Sample phpstack.ini
```
[MySQL-example.com]
master-host = hostname
slave-hosts[] = hostname
port = 3306
db_name = example.com
username = example.com
password = some_random_password
```
