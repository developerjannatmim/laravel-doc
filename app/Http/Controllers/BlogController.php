<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Publics;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
	{
		$blogs = Blog::orderBy('id')->paginate(5);
		return view('blog.index', compact('blogs'));
	}

	public function create(Publics $public)
	{
		return view('blog.create', compact('public'));
	}

	public function store(Request $request, Publics $public)
	{
		$request->validate([
			'title' => 'required|max:30',
			'body' => 'required|max:1000'
		]);

        $blog = new Blog;
        $blog->title = $request['title'];
        $blog->body = $request['body'];
        $blog->public()->associate($public)->save();
		dd($blog);

		return redirect()->route('blog.index')
		->with(['message' => 'data added successfully']);

	}

	public function show(Blog $blog)
	{
		return view('blog.show', compact('blog'));
	}

	public function edit(Blog $blog)
	{
		return view('blog.edit', compact('blog'));
	}


	public function update(Request $request, Blog $blog)
	{
		$request->validate([
			'title' => 'required|max:30',
			'body' => 'required|email|max:1000'
		]);

		if( $blog->update($request->all()) ) {
	    return redirect()->route('blog.index')
	    ->with('Success', 'blog updated successfully');
	    }

	}

	public function destroy(Blog $blog)
	{
		$blog->delete();
		return redirect()->back()->with(['success' => 'deleted successfully']);

	}

}
