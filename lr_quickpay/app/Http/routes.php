<?php

//User
Route::any('/','Pages@index');
Route::any('/Home','Pages@index');
Route::any('/About-Us','Pages@aboutus');
Route::any('/Faqs','Pages@faqs');
Route::any('/Contact-Us','Pages@contactus');
Route::any('/Support','Pages@support');
Route::any('/Tearms-And-Condition','Pages@tc');
Route::any('/Privacy-Policy','Pages@privacypolicy');
Route::any('/Recharge-Partner','Pages@rechargepartner');
Route::any('/Partner-With-Us','Pages@partnerwithus');
Route::any('/Book-Ticket','Pages@booking');
Route::any('/Movie-Show/{id}','Pages@show');
Route::any('/Movie-Show', function (){
    return redirect("/Book-Ticket");
    
});
Route::any('/Select-Seat', function (){
    return redirect("/Book-Ticket");
    
});
Route::any('/Select-Seat/{id}','Pages@seat');
Route::any('/Book-Now/{id}','Pages@booking_now');
Route::any('/User-Profile','Pages@profile');
Route::any('/Feedback','Pages@feedback');
Route::any('/Logout','Pages@logout');
Route::any('/My-Profile','Pages@myprofile');
Route::any('/Forgot','Pages@forgot');
Route::any('/Success-Booking','Pages@successbook');

//User Edit



//Admin
Route::any('/Admin-Authentication','Admin\Admin@login');
Route::any('/Admin-Logout','Admin\Admin@logout');
Route::group(['middleware'=>'admin'], function (){
    
    Route::any('/Admin-Dashboard','Admin\Admin@index');
    Route::any('/Manage-Support','Admin\Admin@support');
    Route::any('/Manage-Feedback','Admin\Admin@feedback');

    Route::any('/Manage-Email-Subscribe','Admin\Admin@emailsub');
    Route::any('/Manage-User','Admin\Admin@manage_user');
    Route::any('/Manage-State','Admin\Admin@manage_state');
    Route::any('/Manage-City','Admin\Admin@manage_city');
    Route::any('/Movie-Type','Admin\Admin@manage_movietype');
    Route::any('/Movie-Sub-Type','Admin\Admin@manage_moviesub');
    Route::any('/Manage-Cast-Type','Admin\Admin@manage_casttype');
    Route::any('/Manage-Cast','Admin\Admin@manage_cast');
    Route::any('/Manage-Banner','Admin\Admin@manage_banner');
    Route::any('/Manage-Theater','Admin\Admin@manage_theater');
    Route::any('/Manage-Movie','Admin\Admin@manage_movie');
    Route::any('/Manage-Review','Admin\Admin@manage_review');
    Route::any('/Manage-Setting','Admin\Admin@manage_setting');
    Route::any('/Manage-Screen','Admin\Admin@manage_screen');
    Route::any('/Manage-Show-Time','Admin\Admin@showtime');
    Route::any('/Manage-Booking','Admin\Admin@managebooking');
    Route::any('/View-Ticket','Admin\Admin@viewticket');
    Route::any('/Status','Admin\Admin@status');
    Route::any('/Remove/{action}/{id}','Admin\Admin@delete');
    
    
    Route::any('/Edit-State-Data/{id}','Admin\Edit@state');
    Route::any('/Edit-City-Data/{id}','Admin\Edit@city');
    Route::any('/Edit-Movie-Data/{id}','Admin\Edit@movie');
    Route::any('/Edit-Movie-Type-Data/{id}','Admin\Edit@movietype');
    Route::any('/Edit-Theater-Data/{id}','Admin\Edit@theater');
    Route::any('/Edit-Casttype-Data/{id}','Admin\Edit@Casttype');
    Route::any('/Edit-Cast-Data/{id}','Admin\Edit@Cast');
    Route::any('/Edit-Profile/{id}','Admin\Edit@profile');
});


//Edit




//Ajax

Route::any('/Backend','Backend@email');
Route::any('/city','Backend@city');
Route::any('/Register','Backend@register');
Route::any('/Login','Backend@login');
Route::any('/Profile-Update','Backend@pupdate');
Route::any('/Seating','Backend@seating');
Route::any('/moviesub','Backend@moviesub');
Route::any('/screen','Backend@screen');
Route::any('/User-Pchange','Backend@change');
Route::any('/Total-Seat','Backend@seat');
Route::any('/Promo','Backend@promo');
Route::any('/Forgot','Backend@forgot');
Route::any('/Autopss','Backend@autopss');
Route::any('/Checkemail','Backend@checkemail');



// rechrge api

Route::any('/Submit','Pages@submit');
Route::any('/Dth','Pages@dth');
Route::any('/Electricity','Pages@electricity');
Route::any('/Ges','Pages@ges');
Route::any('/Success','Pages@success');
Route::any('/Failure','Pages@failure');
Route::any('/Email-Send','Pages@emailsend');



