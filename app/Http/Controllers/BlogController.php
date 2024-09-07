<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function create()
    {
        return view('pages.blog.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'blog_title' => 'required',
            'content' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }

        $fileName = null;
        if ($request->hasFile('image')) {
            // dd($request->all());
            $file = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);
        }

        Blog::create([
            'blog_title' => $request->blog_title,
            'content' => $request->content,
            'image' => $fileName,
        ]);

        return redirect()->route('dashboard')->with('success', 'Blog created successfully');
    }

    public function edit($id)
    {
        $blogs = Blog::find($id);
        return view('pages.blog.edit', compact('blogs'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $blogs = Blog::find($id);
        $validate = Validator::make($request->all(), [
            'blog_title' => 'required',
            'content' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }

        $fileName = null;
        if ($request->hasFile('image')) {
            // dd($request->all());
            $file = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);
        }

        $blogs->update([
            'blog_title' => $request->blog_title,
            'content' => $request->content,
            'image' => $fileName,
        ]);

        return redirect()->route('dashboard')->with('success', 'Blog updated successfully');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->back()->with('danger', 'Blog deleted successfully.');
    }
}
