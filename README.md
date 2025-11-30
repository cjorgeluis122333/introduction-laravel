## Run a project

```shell
  php artisan serve
```

#### ==============================MIGRATION==============================

## Up the all MIGRATION database

This command get all migration do you have created in your project and execute all them
in the database than you have in your .env.

```shell
  php artisan migrate
```
### Specific a folder (--path)
Up migration into a sub folder like: database/migrations/create/relation
```shell
 php artisan migrate:status --path=database/migrations/create/relation
```
## Create new MIGRATION

```shell
php artisan make:migration create_notes_table
```

## Create roll back

```shell
php artisan migrate:rollback
```

# ==============================REQUEST================================

## Working with the REQUEST

### Get a param of the Field: /user/{id}

```php
//In the controller:
public function show(Request $request, $id)
{
   $idFormRequest = $request->route('id');
}
```

### Get a param of the QUERY: /users?page=2&status=active

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

# =======================CUSTOM REQUEST===============================
## Create a custom request
The custom request go in the path app/Http/Requests/<Name_of_the_request>.

### Validation
In the request you cant create a validation into the methode rules. When you go to insert a new date in store
you can not to create a validation in the controller, this make automatic.
```php
public function rules(): array
    {
        return [  //Here go the validation
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|min:2|max:100',
        ];
    }
```
### On Failed Validation
This function is not autogenerate when you create the Request. But it is util because here you can generate a
validation error separate of the controller
```php

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'res' => false,
            'message' => 'Validation errors',
            'errors' => $validator->errors()
        ], 422));
    }

```
# ============================DATABASE==================================

## Seeder
The seeder is a date you insert in your database went you create. Date like user
with roll admin or things like this. They are like the kernel of the info

## Factory
If you want filled a database with date for test you can use factory.

## Fake
Fake is a function use for create date pseudo random. Is some random but less random like some random.



# ===============================RELATION==============================
## Relation


### Relation ONE TO ONE

It has the foreign key -> BELONG 'Pertenese'
It do not have the foreign key -> HasOne

#### Example ONE to ONE

Relation: User -> Phone
```
User - HasOne - Phone
Pone - Belong - User
```
#### Code Sample ONE to ONE
```php
//Phone
class Phone extends Model
{
    protected $guarded = [];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
//UserResource
class User extends Authenticatable
{
    protected $guarded = [];
     
    public function phone():HasOne{
        return   $this->hasOne(related: Phone::class);
    }
}
```

### Relation One To Many
Is exactly like ono to one but here the type is: HasMany

### Relation MANY TO MANY
This relation change something like: Create an Intermediate Table 

#### Update
```php
$school->services()->sync([1, 4, 5]); // Solo tendrá estos servicios
```

#### Insert
```php
//Append the specific service to the school
   $school->services()
           ->attach($request->service_id, ['cost' => $request->cost]);
```

#### Delete
```php
// Remover un servicio
$school->services()->detach($serviceId);
```

#### =====================================================================

## Connect to database
These updates are in the root of the project in a file called: .env  
### Connect to postgres

``` env
DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=9091
DB_DATABASE=db_larabel_introduction
DB_USERNAME=jcvidal
DB_PASSWORD=123456
```
### Connect to mysql

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_introduction
DB_USERNAME=root
DB_PASSWORD=
```
