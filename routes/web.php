<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Models\Post;


/*
|--------------------------------------------------------------------------
| DB Row SQL Queries practice
|--------------------------------------------------------------------------
|
*/

//Route::get('/insert',function (){
//    DB::insert('insert into posts(title, content,is_admin) values(?,?,?)' ,['Laravel practice' , 'I love Laravel' ,false]);
//});
//
//
//Route::get('/read',function (){
//
//    $posts =  DB::select('select * from posts where title=? ',['Laravel practice']);
//
//
//foreach ($posts as $post){
////returns first
//return  $post->content;
//    };
// // var_dump($post['content']);
//
//});

//Route::get('/update',function(){
//
//    return DB::update('update posts set content="Update query" where id=?', [1]);
//
//});
//
//Route::get('/delete',function (){
//
//    return DB::delete('delete from posts where id=?',[2]);
//});

/*
|--------------------------------------------------------------------------
| ELOQUENT ORM practice
|--------------------------------------------------------------------------
|
|
*/

Route::get('/read',function(){
   $posts = Post::all();
    foreach ($posts as $post) {
        var_dump($post->title);
    }

});

Route::get('/findwhere',function(){

   // Item::whereRaw('lower(language) like (?)',["%{$term}%"])->get();
    $post = Post::whereRaw('lower(title) like (?)',["%aravel%"])->first();
    //var_dump($post);
    return $post->content;
});


Route::get('/basicinsert',function(){

    $post = new Post();
    $post->title = 'New eloquent title';
    $post->content = 'New eloquent content';
    $post->is_admin = false;
    $res = $post->save();
    if($res){
        return "success";
    }
   return  "fail while saving";

});

Route::get('/create',function(){

    Post::create([
        'title' => 'the create method',
        'content' => 'the create method content',
    ]);
});

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

//Route::resource('/post','Controllers\PostController')
Route::get('/post/contact',[PostController::class,'contact']);
Route::resource('/post', PostController::class);
