## Setting up
> git clone https://github.com/rajsamb/PHPBoilerplate.git <YourProjectName>
> Change autoload foler name from "PHPBoilerplate" to <YourProjectNamespace>.
> Remove Greetings folder or change namespace to <YourProjectNamespace>
> Change composer.json name & description.
> composer install
> composer dumpautoload [In case autoloade namespace is chaged after coomposer install]


## Setting Git Path:
> Create Repository on remote copy the repository url and change the git url as below.
> git remote set-url origin https://github.com/youraccount/YourProject.git


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