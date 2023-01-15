<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('CREATED_AT', 'desc');
        return view('comments.index', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id)
    {
        $validatedData = $request->validate([
            'content'=> 'required|max:80',
        ]);

        $post = Post::findOrFail($post_id);

        $comment=new Comment;
        $comment->user_id= auth()->user()->id;
        $comment->content=$request->content;
        $comment->post_id = $post_id;
        $comment->post()->associate($post);
        $comment->save();

        session()->flash('message', 'Comment was created');
        return redirect('posts/' . $post_id);
        
    }

    /*
    public function store(Request $request) {
     if(Request::ajax()){
           $comment = new Comment();
           $comment->name = $request->name;
           $comment->type = $request->type;
           $comment->price = $request->price;

           $comment->save();
           return response()->json(['success'=>'Data is successfully added']);
     }
    }*/

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
