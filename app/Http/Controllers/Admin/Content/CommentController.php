<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Content\Comment;
use App\Models\Content\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();
        foreach ($comments as $comment) {
            $comment->seen = 1;
            $comment->save();
        }
        return view('admin.content.comment.index', compact('comments'));
    }

    public function unseen()
    {
        $comments = Comment::where('seen', 0)->orderBy('created_at', 'desc')->get();
        foreach ($comments as $comment) {
            $comment->seen = 1;
            $comment->save();
        }
        return view('admin.content.comment.index', compact('comments'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        $posts = Post::all();

        $post_id = $posts->where('id', $comment->commentable_id)->first();
        return view('admin.content.comment.show', compact('comment', 'post_id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    public function approved(Comment $comment)
    {
        $comment->approved == 0 ? $comment->approved = 1 : $comment->approved = 0;
        $comment->save();
        return redirect()->route('admin.content.comment.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {

        $result = $comment->delete();


        if ($comment) {
            return redirect()->route('admin.content.comment.index')->with('success', 'اطلاعات با موفقیت حذف شد');
        } else {
            return redirect()->route('admin.content.comment.index');
        }
    }
}
