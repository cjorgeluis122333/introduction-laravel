## Run a project
```shell
  php artisan serve
```

## Up the all MIGRATION database
This command get all migration do you have created in your project and execute all them 
in the database than you have in your .env.
```shell
  php artisan migrate
```

## Create new MIGRATION
```shell
php artisan make:migration create_notes_table
```

## Working of the REQUEST
### Get a param of the Field: user/{id}
```php
//In the controller:
public function show(Request $request, $id)
{
   $idFormRequest = $request->route('id');
}
```

### Get a param of the Query: /users?page=2&status=active
```php
//query( <Query_Name>, <Default_Value)
$pagina = $request->query('page');
$estado = $request->query('status', 'active'); // Con valor por defecto

```
### Info client  
```php
$ip = $request->ip();
$metodo = $request->method(); // GET, POST, PUT, etc.
$ruta = $request->path(); // /users/profile
$url = $request->url(); // http://midominio.com/users
```

## Connect to postgres
``` env
DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=9091
DB_DATABASE=db_larabel_introduction
DB_USERNAME=jcvidal
DB_PASSWORD=123456
```

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_introduction
DB_USERNAME=root
DB_PASSWORD=
```
