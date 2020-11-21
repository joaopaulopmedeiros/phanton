# phanton

## Features

Routing:
```php
$router->get('', 'PagesController@home');
$router->post('posts', 'PostsController@store');
```

Database connection:
```php
Connection::make($config = App::get('config')['database'])
```

Query builder:
```php
App::get('database')->selectAll('posts', 'Post');
App::get('database')->insert('posts', [
   'title' => $_POST['title']
]);
```

Namespaces
```php
namespace Phanton\Core;
```

MVC Architecture

ES6+ Features and SCSS support
- Webpack
- Webpack-cli

## How to run it?

```php
composer install
``` 

```javascript
npm install
``` 

```php
php -S localhost:2808
``` 
