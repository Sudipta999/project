<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use URL;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 1)->orderBy('created_at')->paginate(9);
        return view('blog', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $shareComponent = \Share::page(URL::current())->facebook()->twitter()->linkedin()->telegram()->whatsapp();
        $blog = Blog::where('blog_slug', $slug)->first();
        $topBlog = Blog::where('top_blog', 1)->get();
        $blogs = Blog::where('id', '!=', $blog->id)->where('blog_type', $blog->blog_type)->orderBy('created_at')->limit(3)->get();
        $slideBlogs = Blog::where('id', '!=', $blog->id)->where('top_blog', 0)->get();
        $comment = Comment::where('blog_id',$blog->id)->get();
        // $onePrevious =  date('Y-m-d', strtotime(date('Y-m')." -2 month"));
        // $onePrevious->format('Y-m');
        return view('blog_details', compact('comment','blog', 'blogs', 'shareComponent', 'topBlog', 'slideBlogs'));
    }

    public function datewise($date)
    {
        $blogs = Blog::where('created_at', 'LIKE', $date . '%')->orderBy('created_at')->paginate(9);
        return view('blog', compact('blogs'));
    }

    public function blogComment(Request $request, $slug)
    {
        $request->validate([
            'comments' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $blog = Blog::where('blog_slug', $slug)->first();
        $comment = new Comment;
        $comment->comments = $request->comments;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->blog_id = $blog->id;
        $comment->save();
        return back();
    }

}
