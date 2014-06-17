PHP Test Application
============

A basic PHP application using Composer (https://getcomposer.org/) and the Slim Framework (http://www.slimframework.com/).

Getting Started
============

Update Composer by running the following command
```php composer.phar self-update```

Update the installed packages or install them in the first place by running
```php composer.phar install```

This app loads an ini file located at (/etc/lampstack.ini) and connects to a database with those credentials (only on /demo) and provides a green/red indicator if the connection work and displays the MySQL Version.
