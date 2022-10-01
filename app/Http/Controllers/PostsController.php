<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(){
        //$posts = Post::all();
		//$posts = Post::orderBy('created_at', 'desc')->get()
        $posts = Post::latest()
            ->filter(request(['month','year']))
            ->get();

        // if($month = request('month')){
        //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }
        // if($year = request('year')){
        //     $posts->whereyear('created_at', $year);
        // }

        // $posts = $posts->get();
        
        //$archives= Post::archives();

        // $archives= Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        //     ->groupBy('year','month')
        //     ->orderByRaw('min(created_at)')
        //     ->get()
        //     ->toArray();
        //return $archives;

        return view('posts.index',compact('posts'));

    }
    
    public function show(Post $post){ //$id

        //$post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){

        //dd(request()->all());

        // Validation
        $this->validate(request(),[
            'title'=> 'required',
            'body'=>'required'
        ]);

        // //Create a new post using the request data
        // $post = new Post;

        // $post->title=request('title');
        // $post->body=request('body');


        // // Save it to the database
        // $post->save();

         //OR

        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        //OR

        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        //     'user_id' => auth()->id()
        // ]);

        // And then redirect to the homepage
        return redirect('/');

        
    }
}
