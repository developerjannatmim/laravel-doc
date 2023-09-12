<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $posts = Post::orderBy('id')->paginate(5);
    return view('posts.index', ['posts' => $posts]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('posts.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {

    $validated = $request->validate([
      'title' => 'required|max:100',
      'body' => 'required|max:1000'
    ]);

    $post = new Post;
    $post->title = $request['title'];
    $post->body = $request['body'];
    $post->user()->associate(Auth::user());
    //$request->user()->posts()->save($post); //or
    $post->save();
    return redirect()->route('posts.index')->with(['success' => 'Your Post added successfully']);
    
    //return response()->json(Post::create($request->validated()));//for backend(api) data
    
    // $request->validate([
    //   'title' => 'required|max:5',
    //   'body' => 'required|max:1000',
    // ]);
    // Post::create($request->all());
    // return redirect()->route('posts.index')
    //   ->with('Success', 'Post created successfully.');

    //Post::create($validated);
    //Product::create($request->validated()); //PostStoreRequest file ee rules array er moddhe validation rules define korte evabe korbo

    ///or,

    // $input = $request->all();
    // $post = Post::create($input);
    // return redirect()->route('posts.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Post $post)
  {
    return view('posts.show', compact('post'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Post $post)
  {
    return view('posts.edit', compact('post'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $id)
  {
    $post = Post::find($id);
    $post->title = $request->input('title');
    $post->body = $request->input('body');
    $post->save();
    return redirect()->route('posts.index')
      ->with('Success', 'Post updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Post::where('id', $id)
    ->delete();
    return redirect()->back();
  }
}