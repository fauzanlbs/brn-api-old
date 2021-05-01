# API BRN 

RESTful API Master BRN made from [Laravel 8](https://laravel.com/)

## Installation

### 1. Download
  Clone/Download this repository place on your server. *(I highly recommend you use either Laravel Homestead or Laravel Valet, to get the optimal server configuration and no errors through installation.)*

### 2. Environment Files
This project comes with a `.env.example` file in the root of the project.

Copy `env.example` to `.env` where you prepare your environment.

**Note:** Make sure you do not rename `.env.example`, for team purposes.

### 3. Composer
API BRN dependencies are managed through the [PHP Composer tool](https://getcomposer.org/). Install the depencencies by navigating into your project in terminal and typing this command:
```bash
composer install
```

After that run :
```bash
php artisan migrate:fresh --seed
```

## API Documentation 
Generate and publish api docs, in terminal and typing this command:
```bash
php artisan scribe:generate
```

You can visit the generated API documentation in http://{$baseUrl}/docs in your local machine.

or here's the published postman [here](working in progress)


## Generating Diagrams

Package Laravel ER Diagram Generator requires the `graphviz` tool.

You can install Graphviz on MacOS via homebrew:

```bash
brew install graphviz
```

Or, if you are using Homestead:

```bash
sudo apt-get install graphviz
```

To install Graphviz on Windows, download it from the [official website](https://graphviz.gitlab.io/_pages/Download/Download_windows.html).

You can generate entity relation diagrams using the provided artisan command:

```bash
php artisan generate:erd
```

This will generate a file called `graph.png`.

You can also specify a custom filename:

```bash
php artisan generate:erd output.png
```

Or use one of the other [output formats](https://www.graphviz.org/doc/info/output.html), like SVG:

```bash
php artisan generate:erd output.svg --format=svg
```

**Notes:** 
- If you run this via [Homestead's](https://laravel.com/docs/homestead) ssh, you can this command: `phpunit` (in your project directory).
- After running testing, you can check generated code coverage from `.build` folder.


## Built With

* [laravel/laravel](https://github.com/laravel/laravel) - Web application framework with expressive, elegant syntax.
* [laravel/sanctum](https://github.com/laravel/sanctum) - Provides a featherweight authentication system for SPAs and simple APIs.
* [laravel/socialite](https://github.com/knuckleswtf/scribe) - It handles almost all of the boilerplate social authentication code you are dreading writing.
* [knuckleswtf/scribe](https://github.com/knuckleswtf/scribe) - Generate API documentation for humans from your Laravel codebase.
* [rinvex/laravel-addresses](https://github.com/rinvex/laravel-addresses) - Addressbook management.
* [axlon/laravel-postal-code-validation](https://github.com/axlon/laravel-postal-code-validation) - Postal code validation for Laravel, based on Google's Address Data Service. 
* [beyondcode/laravel-er-diagram-generator](https://github.com/beyondcode/laravel-er-diagram-generator) - Generate entity relation diagrams by inspecting the relationships defined in your model files.
* [spatie/laravel-permission](https://github.com/spatie/laravel-permission) - Associate users with permissions and roles
* [lazychaser/laravel-nestedset](https://github.com/lazychaser/laravel-nestedset) - working with trees in relational databases.
* [fruitcake/laravel-cors](https://github.com/fruitcake/laravel-cors) -  allows you to send Cross-Origin Resource Sharing headers with Laravel middleware configuration.
  
