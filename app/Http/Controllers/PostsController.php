<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Intervention\Image\Facades\Image as Image;
use Session;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view('pages.home')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title'=>'required|max:255',
            'img'=>'required'
        ));
        $post = new Post;

        $post->title = $request->title;
        

        if($request->hasfile('img')){
            $image = $request->file('img');
            $filename = time().'.' . $image->getClientOriginalExtension();
            $location = public_path('img/'. $filename);
            Image::make($image)->save($location);

            $post->img = $filename;
        }

        $post->save();
        Session::flash('success',' ✔ Post created successfully...');
        return redirect()->route('post.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //    echo 'saved';
    $post = Post::find($id);
    return view('posts.show')->with('post', $post);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add_like(Request $request, $id)
    {
        return redirect('/home');
    }

    public function del_like($id)
    {
        //
    }
}
