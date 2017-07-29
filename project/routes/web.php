<?php

use App\Article;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('articles',function(){
    return Article::all();
});

Route::get('articles/{id}', function($id){
    return Article::find($id);
});

Route::post('articles', function(Request $request){
    return Article::create($request->all);
});

Route::put('articles/{id}', function(Request $request, $id){
    $article = Article::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('articles/{id}', function($id){
  Article::find($id)->delete();

  return 204;
});
