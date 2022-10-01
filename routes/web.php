<?php

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
//use App\Task;


// App::bind('App\Billing\Stripe', function(){

//     return new \App\Billing\Stripe(config('services.stripe.secret'));

// });

//$stripe = App::make('App\Billing\Stripe');
//$stripe = resolve('App\Billing\Stripe');
//$stripe = app('App\Billing\Stripe');
//dd($stripe); 



Route::get('/','PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}','PostsController@show');

Route::post('/posts/{post}/comments','CommentsController@store');



Route::get('/posts/tags/{tag}','TagsController@index');


//Lesson 19
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

// //controller => PostsController
// // Eloquent model => Post
// // migrations => create_posts_table

//Lesson 8
// Route::get('/tasks','TasksController@index');
// Route::get('/tasks/{task}','TasksController@show');


//Lesson 6
// Route::get('/', function () {
//     // return view('welcome',[
//     //     'name' => 'Laracasts'
//     // ]);
//     // $tasks = [
//     //     'Go to the store',
//     //     'Finish my screencast',
//     //     'Clean the house'
//     // ];
//     $tasks = DB::table('tasks')->get();
//     return view('welcome',compact('tasks'));
// });

// Route::get('/tasks/{task}', function ($id) {
//     dd($id);
//     $tasks = DB::table('tasks')->latest()->get();

//     $task = DB::table('tasks')->find($id);
//     dd($task);

//     $task = Task::find($id);
//     return view('tasks.show',compact('task'));
// });

//Lesson 7
// Route::get('/tasks', function () {
  
//     //$tasks = DB::table('tasks')->latest()->get();
//     $tasks = Task::all();
//     return view('tasks.index',compact('tasks'));
// });



//Lesson 5
// Route::get('/', function () {
//     //$name = 'Laracasts';
//     $tasks = [
//      'Go to the store',
//      'Finish my screencast', 
//      'Clean the house'];
//     //Lesson 5, 3 ways to pass data to view 
//     //return view('welcome', ['tasks' => $tasks]);
//     return view('welcome', compact('tasks'));
//     //return view('welcome')->with('tasks', $tasks);
// }

//Lesson 2

// Route::get('/', function () {
//     return view('welcome');
//  });
// Route::get('/about', function () {
//     return view('about');
// });