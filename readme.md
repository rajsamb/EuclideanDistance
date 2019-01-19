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