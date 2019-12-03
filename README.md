# simplePHP-MVC
---
## Registering new url endpoint
You can register new url endpoint by adding it to the file Routes.php.
```
Route::<method>(<url>, <callback function>)
```
Examples:
1. GET method
```
Route::get('index', function (){
   HomeController::renderView(); 
});
```
2. POST method
In order to pass POST parameters to the callback function, the reference of the ```$_POST``` variable must be created, and use a closure variable using the ```use``` keyword.
```
$postData = $_POST;
Route::post('login', function () use ($postData){
   LoginController::login($postData); 
});
```
