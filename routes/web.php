



<?php

Route::any("/postIndex", "ControllerPost@index") -> name("post.index");
Route::any("/postCreate", "ControllerPost@create") -> name("post.create");
Route::any("/", "ControllerPost@store") -> name("post.store");
Route::any("/{id}/edit", "ControllerPost@edit") -> name("post.edit");
Route::any("/{id}", "ControllerPost@update") -> name("post.update");
Route::any("/{id}/delete", "ControllerPost@destroy") ->name("post.destroy");
