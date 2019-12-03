
<?php

Route::set('home',function(){
    Home::createView("index");
});

Route::set('payment',function(){
    //Payment::createView();
});

Route::set('Feedback',function(){
    //Feedback::createView();
    //echo "Feedback post";
});

Route::set('login',function(){
    Controller::createView('login');
});
?>
