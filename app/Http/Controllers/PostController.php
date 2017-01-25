<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controllers;
use App\Post;
use Session;

class PostController extends Controller
{
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //crate a variable page and store all blog post in it.
       $posts = Post::orderBy('id', 'desc')->paginate(10);

        //return a view and pass.
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.createblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data;
       $this->validate($request,array(
         'title' => 'required|max:254',
         'slug' => 'required|alpha_dash|min:5|max:255',
         'body' => 'required'
       ));



        //store into database;
       $post = new Post;

       $post->title = $request->title;
       $post->slug= $request->slug;
       $post->body = $request->body;

       $post->save();

       Session::flash('success','This blog is successfully saved!');
        //redirct to another page which shouw success or notification
       return redirect()->route('posts.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find post from the database from the "id"

        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //validate the date
       $post = Post::find($id);

       if ($request->input('slug') == $post->slug) {
          $this -> validate($request, array(
           'title' => 'required|max:255',
           'body' => 'required'
         ));
         }
         else {

        $this->validate($request,array(
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
          'body' => 'required'
        ));
        }
        //save to database
        $post = Post::find($id);

        $post->title = $request -> input ('title');
        $post -> slug = $request -> input ('slug');
        $post -> body = $request -> input('body');

        $post -> save ();

        //send a flash message to user;
        Session::flash('success','Successfully post the Blog!');

        //redirct to Show
        return redirect()->route('posts.show', $post -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //esset the post id from database
        $post = Post::find($id);

        $post -> DELETE ();

        Session::flash('success', 'Successfully deleted the blog!!');

        return redirect() -> route('posts.index');


    }
}
