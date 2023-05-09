# CI4 Explore - PetStore

## What is it?
This is a RESTful API built in CodeIgniter.

The example is try to implement the API that declared as OpenAPI 3.0 (YAML) in the [Swagger Editor](https://editor.swagger.io/#).

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.

More information about CodeIgniter can be found at the [official site](https://codeigniter.com).

The user guide corresponding to the latest version of the CI framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Setup

Copy `.env.development` to `.env` and tailor for your app, specifically the baseURL and any database settings.

## Some Tips
This is just an illustration of how CI4 and OpenAPI 3.0/Swagger works. It shows my practice during development with these techs. 

It is only a self story, not a best practice, though I wanna make it to.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
- [xdebug](https://www.google.com/search?q=xdebug) if you plan to use Xdebug for debugging

## Todo
There's a vision of this project. If anyone is insteresting please drop me a msg. 

I plan to do the following at least:
- dockerize it
- more API implementation towards the YAML
- make it as a reusable structure and for OpenAPI code generator

