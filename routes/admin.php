<?php


/* category Controller*/

Route::get('/category/trash', 'CategoryController@trashedCategory')
->name('category.trash');


Route::post('/category/{category}/restore', 'CategoryController@restoreCategory')
->name('category.restore');
Route::delete('/category/{category}/force-delete', 'CategoryController@forceDeleteCategory')
->name('category.force.delete');

Route::resource('category','CategoryController');




/* Post Controller*/

Route::post('/post/upload', 'PostController@uploadPhoto')->name('post.upload');

 Route::get('/post/trash', 'postController@trashedpost')
->name('post.trash');

Route::post('/post/{post}/restore', 'postController@restorepost')
->name('post.restore');

Route::delete('/post/{post}/force-delete', 'postController@forceDeletepost')
->name('post.force.delete');

Route::resource('post', 'PostController');





