
<?php
$postData = $_POST;

Route::get('home',function(){
    HomeController::renderView();
});


Route::get('login', function(){
	LoginController::renderView();
});

Route::post('login', function() use ($postData){
	LoginController::processLogin($postData);
});
?>
