
<?php
$postData = $_POST;
Route::set('home',function(){
	//var_dump($_SERVER['REQUEST_METHOD']);
    	Home::createView("index");
});

Route::set('payment',function(){
    //Payment::createView();
});

Route::set('Feedback',function(){
    //Feedback::createView();
    //echo "Feedback post";
});

Route::set('login', function() use ($postData){
	if($_SERVER['REQUEST_METHOD'] === "POST")
		Login::processLogin($postData);
	else
		Controller::createView('login');
});
?>
