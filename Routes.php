
<?php
$postData = $_POST;

Route::get('home',function(){
    HomeController::renderView();
});



Route::get('register', function(){
	RegisterController::renderView();
});

Route::post('register', function() use ($postData){
	RegisterController::processRegister($postData);
});



Route::get('login', function(){
	LoginController::renderView();
});

Route::post('login', function() use ($postData){
	LoginController::processLogin($postData);
});
?>
