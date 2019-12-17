<?php
//-----------------------------------fontend site ---------------------------------------


//user controller start ---------------------------------------------
Route::get('/registration','userController@Registration');
Route::post('/save-registration','userController@save_registration');
Route::get('/user-login','userController@user_login');
Route::post('/login','userController@login');
Route::get('/user_logout','userController@user_logout');
//user controller end -----------------------------------------------

//home controller start ----------------------------------------------
Route::get('/','homeController@index');
Route::get('/show-video/{status_id}','homeController@show_video');
Route::get('/about-us','homeController@about_us');
Route::get('/contact','homeController@contact');
Route::get('/post','homeController@post');
Route::get('/post-upload','homeController@post_upload');

//home controller start ----------------------------------------------
//user profile controller start--------------------------------

Route::get('/user-deshbord/{user_id}','userdeshbordController@user_deshbord');
Route::get('/user-status','userdeshbordController@user_status');
Route::post('/save-user-status/{user_id}','userdeshbordController@save_user_status');
Route::get('/user-all-status','userdeshbordController@user_all_status');
Route::get('/delete-user-status/{user_post_id}','userdeshbordController@delete_user_status');
//user profile controller end--------------------------------


//user commment  start--------------------------------
Route::post('/save-user-comment/{status_id}','usercommentController@save_user_comment');
//user commment  start--------------------------------

//user like  start--------------------------------
Route::get('/user-like/{status_id}','userlikeController@user_like');
//user like  start--------------------------------





















//-----------------------------------backend site ---------------------------------------


//-------------Admin login start ---------------
Route::get('/admin','adminController@index');
Route::get('/deshbord','SuperadminController@index' );
Route::post('/admin-login','adminController@admin_login' );
Route::get('/all-status','adminController@all_status' );
Route::get('/logout','SuperadminController@logout');
//-------------Admin login end ---------------


//------------------division start -------------------save-divition
Route::get('/add-division','divisionController@index');
Route::post('/save-division','divisionController@save_division');
Route::get('/all-division','divisionController@all_division');
Route::get('/unactive-division/{division_id}','divisionController@unactive_division');
Route::get('/active-division/{division_id}','divisionController@active_division');
Route::get('/edit-division/{division_id}','divisionController@edit_division');
Route::post('/update-division/{division_id}','divisionController@update_division');
Route::get('/delete-division/{division_id}','divisionController@delete_division');


Route::get('/division-ways-show/{division_id}','divisionController@division_ways_show');

//------------------division end -------------------




//------------------status start -------------------
Route::get('/status','statusController@index');
Route::post('/save-status','statusController@save_status');
Route::get('/all-status','statusController@all_status');
Route::get('/unactive-status/{status_id}','statusController@unactive');
Route::get('/active-status/{status_id}','statusController@active');
Route::get('/edit-status/{status_id}','statusController@edit_status');
Route::post('/update-status/{status_id}','statusController@update_status');
Route::get('/delete-status/{status_id}','statusController@delete_status');
//------------------status end -------------------
//-------------------user post --------------------------------------
Route::get('/user-status','userpostController@user_status');
Route::get('/user_post_unactive/{user_post_id}','userpostController@user_post_unactive');
Route::get('/user_post_active/{user_post_id}','userpostController@user_post_active');
Route::get('/user_post_delete/{user_post_id}','userpostController@user_post_delete');
Route::get('/user-show-video/{user_post_id}','userpostController@user_show_video'); 
//-----------------user porst end-------------------------------------

Route::get('/cleander','cleanderController@index');
