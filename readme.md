## Setting up
> Change autoload foler name from "PHPBoilerplate" to <YourOne>.
> composer dumpautoload
> Remove Greetings folder or change namespace to <YourOne>

## Running Greeting with the command line:
> cd src
> php index.php

## Running Test:
phpunit --bootstrap vendor/autoload.php test
or if phpunit not installed
vendor/bin/phpunit

## Source:
http://www.phplab.info/categories/php-projects/setting-up-initial-php-project-with-composer-php-unit-and-initialize-with-git
http://www.phplab.info/categories/php-projects/creating-php-project-boilerplate