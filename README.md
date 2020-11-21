# phanton

## Features

Routing:
```php
$router->get('', 'PagesController@home');
$router->post('posts', 'PagesController@posts');
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
