
<?php
$postData = $_POST;
Route::get('home',function(){
    	Home::renderView();
});

Route::get('payment',function(){
	Payment::renderView();
});

Route::get('Feedback',function(){
	Feedback::renderView();
});

Route::get('login', function(){
	Login::renderView();
});
Route::post('login', function() use ($postData){
	Login::processLogin($postData);
});
?>
