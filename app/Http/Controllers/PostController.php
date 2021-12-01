<?php

namespace App\Http\Controllers;

use Canvas\Models\Post;
use Illuminate\Http\Request;
use Canvas\Events\PostViewed;
use Illuminate\Support\Facades\DB;
use Canvas\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index() {

        //$posts = Post::all();
        $posts  =  Post::published()->with('user', 'tags', 'topic','views','comments')->orderBy('created_at', 'desc')->paginate(20);
        $hots =    Post::published()
                ->whereHas('tags', function ($query) {
                $query->where('slug','=','hot');
                })
                ->with('user', 'views', 'topic','tags','comments')
                ->take(4)->get();
        //dd($hots->topic()->name);

        $most_commented  =  Post::published()->withCount('user', 'tags', 'topic','views','comments')->orderByDesc("comments_count")->take(4)->get();


        return view('welcome', compact('posts','hots','most_commented'));
    }

    public function best() {

        //$posts = Post::all();
        $posts  =  Post::published()->withCount('user', 'tags', 'topic','views')->orderByDesc("views_count")->paginate(10);
        $hots =    Post::published()
                ->whereHas('tags', function ($query) {
                $query->where('slug','=','hot');
                })
                ->with('user', 'views', 'topic','tags','comments')
                ->take(4)->get();
        //dd($hots->topic()->name);

        $most_commented  =  Post::published()->withCount('user', 'tags', 'topic','views','comments')->orderByDesc("comments_count")->take(4)->get();


        return view('welcome', compact('posts','hots','most_commented'));

//dd($posts);


    }

    public function new() {

        //$posts = Post::all();
        $posts  = Post::published()->with('user', 'tags', 'topic','views')->orderByDesc('created_at', 'desc')->paginate(5);

        $hots =    Post::published()
                ->whereHas('tags', function ($query) {
                $query->where('slug','=','hot');
                })
                ->with('user', 'views', 'topic','tags','comments')
                ->take(4)->get();
        //dd($hots->topic()->name);

        $most_commented  =  Post::published()->withCount('user', 'tags', 'topic','views','comments')->orderByDesc("comments_count")->take(4)->get();


        return view('welcome', compact('posts','hots','most_commented'));
}



    public function hot() {

        //$posts = Post::all();
        //$posts  =  Post::published()->with('user', 'views', 'topic','tags')->get();

        // $posts = Post::published()->with('user', 'views', 'topic','tags')->whereRelation('tags', 'slug', 'like', 'hot')->paginate(3);

        //dd($posts);

    //  $posts = Post::where(['tags' => function ($query) {
    // $query->where('slug', 'like', '%anushka%');
    //  }])->paginate(5);


    // $posts = Post::firstWhere(['tags' => function ($query) {
    //     $query->where('slug', 'like', '%anushka%');
    // }])->paginate(5);

      $posts =    Post::published()
                ->whereHas('tags', function ($query) {
                $query->where('slug','=','hot');
                })
                ->with('user', 'views', 'topic','tags')
                ->orderBy('created_at' , 'desc')
                ->paginate(10);


                $hots =    Post::published()
                ->whereHas('tags', function ($query) {
                $query->where('slug','=','hot');
                })
                ->with('user', 'views', 'topic','tags','comments')
                ->take(4)->get();
        //dd($hots->topic()->name);

        $most_commented  =  Post::published()->withCount('user', 'tags', 'topic','views','comments')->orderByDesc("comments_count")->take(4)->get();


        return view('welcome', compact('posts','hots','most_commented'));
    }




    public function review() {
        $posts =    Post::published()
        ->whereHas('topic', function ($query) {
        $query->where('slug','=','review');
        })
        ->with('user', 'views', 'topic','tags')
        ->orderBy('created_at' , 'desc')
        ->paginate(10);


        $hots =    Post::published()
        ->whereHas('tags', function ($query) {
        $query->where('slug','=','hot');
        })
        ->with('user', 'views', 'topic','tags','comments')
        ->take(4)->get();
//dd($hots->topic()->name);

$most_commented  =  Post::published()->withCount('user', 'tags', 'topic','views','comments')->orderByDesc("comments_count")->take(4)->get();
return view('welcome', compact('posts','hots','most_commented'));


   
    }



    public function video() {
        $posts =    Post::published()
        ->whereHas('topic', function ($query) {
        $query->where('slug','=','video');
        })
        ->with('user', 'views', 'topic','tags')
        ->orderBy('created_at' , 'desc')
        ->paginate(10);


        $hots =    Post::published()
        ->whereHas('tags', function ($query) {
        $query->where('slug','=','hot');
        })
        ->with('user', 'views', 'topic','tags','comments')
        ->take(4)->get();
//dd($hots->topic()->name);

$most_commented  =  Post::published()->withCount('user', 'tags', 'topic','views','comments')->orderByDesc("comments_count")->take(4)->get();
return view('welcome', compact('posts','hots','most_commented'));


   
    }


    public function jerkoff() {
        $posts =    Post::published()
        ->whereHas('topic', function ($query) {
        $query->where('slug','=','jerkoff');
        })
        ->with('user', 'views', 'topic','tags')
        ->orderBy('created_at' , 'desc')
        ->paginate(10);


        $hots =    Post::published()
        ->whereHas('tags', function ($query) {
        $query->where('slug','=','hot');
        })
        ->with('user', 'views', 'topic','tags','comments')
        ->take(4)->get();
//dd($hots->topic()->name);

$most_commented  =  Post::published()->withCount('user', 'tags', 'topic','views','comments')->orderByDesc("comments_count")->take(4)->get();
return view('welcome', compact('posts','hots','most_commented'));


   
    }


    public function show($slug) {

        $post = Post::where('slug', $slug)->first();
        //dd($post);
        event(new PostViewed($post));
        return view('show', compact('post'));


    }
}
