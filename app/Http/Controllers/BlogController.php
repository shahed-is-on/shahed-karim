<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $blogs = Blog::when($q, fn($qq)=>$qq->where(function($sub) use ($q) {
                            $sub->where('title','like',"%$q%")
                                ->orWhere('name','like',"%$q%")
                                ->orWhere('keywords','like',"%$q%");
                        }))
                        ->latest()
                        ->paginate(12)
                        ->withQueryString();

        return view('backend.blogs.index', compact('blogs', 'q'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->pluck('name','id');
        return view('backend.blogs.create', compact('categories'));
    }

    public function store(StoreBlogRequest $request)
    {
        $data = $request->validated();
    // handle images...
    foreach (['image_1','image_2','image_3'] as $field) {
        if ($request->hasFile($field)) {
            $data[$field] = $request->file($field)->store('blogs', 'public');
        }
    }
    $blog = Blog::create($data);
    return redirect()->route('blogs.show', $blog)->with('success', 'Blog created.');
    }

    public function show(Blog $blog)
    {
        return view('backend.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $categories = Category::orderBy('name')->pluck('name','id');
        return view('backend.blogs.edit', compact('blog','categories'));
    }

    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $data = $request->validated();
    foreach (['image_1','image_2','image_3'] as $field) {
        if ($request->hasFile($field)) {
            if ($blog->$field && \Storage::disk('public')->exists($blog->$field)) {
                \Storage::disk('public')->delete($blog->$field);
            }
            $data[$field] = $request->file($field)->store('blogs', 'public');
        }
    }
    $blog->update($data);
    return redirect()->route('blogs.show', $blog)->with('success', 'Blog updated.');
    }

    public function destroy(Blog $blog)
    {
        // delete images
        foreach (['image_1','image_2','image_3'] as $field) {
            if ($blog->$field && Storage::disk('public')->exists($blog->$field)) {
                Storage::disk('public')->delete($blog->$field);
            }
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted.');
    }


}
