<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $posts = Post::orderBy('id', 'desc')->paginate(5);
    return view('posts.index', compact('posts'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
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
  public function store(PostStoreRequest $request)
  {

    //return response()->json(Post::create($request->validated()));//for backend(api) data
    Post::create($request->validated());
    return redirect()->route('posts.index');

    // $request->validate([
    //   'title' => 'required|max:5',
    //   'body' => 'required|max:1000',
    // ]);
    // Post::create($request->all());
    // return redirect()->route('posts.index')
    //   ->with('Success', 'Post created successfully.');

    //Post::create($validated);
    Product::create($request->validated()); //PostStoreRequest file ee rules array er moddhe validation rules define korte evabe korbo

    ///or,

    // $input = $request->all();
    // $post = Post::create($input);
    // return redirect()->route('posts.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(PostStoreRequest $request)
  {
    $data = $request->validated();
    return response()->json(Post::where(['id' => $data->id])->update($data));
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}