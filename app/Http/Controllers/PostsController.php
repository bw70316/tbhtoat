<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostsCreateRequest;
use App\Photo;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::orderBy('id', 'desc')->skip(1)->take(1)->get();
        $posts = Post::all();
        
     
        return view('posts.index', compact('posts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id')->all();


        return view('posts.create', compact('categories'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request)
    {

        $input = $request->all();

        $user = Auth::user();
        //

        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        $user->posts()->create($input);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function show($slug){

    //     $post = Post::findBySlugOrFail($slug);
 
    //     $comments = $post->comments()->whereIsActive(1)->get();
 
 
 
    //     return view('post', compact('post', 'comments'));
    //  }
    public function show($id)
    {
        $post = Post::findOrFail($id);

     


       return view('posts/show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        
        //
        // $post = Post::findOrFail($id);

        // $categories = Category::pluck('name', 'id')->all();

        // return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsCreateRequest $request, $id)
    {
        //
        $input = $request->all();

        $user = Auth::user();

        Auth::user()->posts()->whereId($id)->first()->update($input);

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

//        unlink(public_path() . $post->photo->file);

        $post->delete();

        return redirect('/posts');
        //
    }

    public function post($id){
//       $post = Post::findOrFail($id);
//
//       return view('posts', compact('post'));


    }

    public function all(){

        $posts = Post::all();
        
     
        return view('posts.all', compact('posts'));
    }
}
