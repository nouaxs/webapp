<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('CREATED_AT', 'desc')->with('user')->with('comments')->paginate(5);
        return view('posts.index', ['posts' => $posts]);
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
        $validatedData = $request->validate([
            'caption' => 'required|max:800',
        ]);

        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->caption = $request->caption;
        $post->save();

        session()->flash('message', 'Post was created');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = Gate::inspect('edit', Post::findOrFail($id));
        if ($response->allowed()) {
            $post = Post::findOrFail($id);
            return view('posts.edit', compact('post'));
        } else {
            session()->flash('message', $response->message());
            return redirect()->route('posts.index');
        }
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
        $response = Gate::inspect('update', Post::findOrFail($id));
        $post = Post::findOrFail($id);
        if ($response->allowed()) {
            $validatedData = $request->validate([
                'caption' => 'required|max:800',
            ]);

            $post->caption = $request->caption;
            $post->save();

            session()->flash('post', 'Post was updated');
            return redirect('posts/' . $post->id);
        } else {
            session()->flash('message', $response->message());
            return redirect('posts/' . $post->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Gate::inspect('delete', Post::findOrFail($id));
        if ($response->allowed()) {
            $post = Post::findOrFail($id);
            $post->delete();

            session()->flash('message', 'Post was deleted');
            return redirect()->route('posts.index');
        } else {
            session()->flash('message', $response->message());
            return redirect()->route('posts.index');
        }
    }
}
