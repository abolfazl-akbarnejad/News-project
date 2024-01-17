<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Content\PostRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Content\Post;
use App\Models\Content\PostCategory;
use App\Models\Content\PostFile;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.content.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories =  PostCategory::all();
        return view('admin.content.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request, ImageService $imageService)
    {
        $inputs = $request->all();

        //for time published_at
        $realetimestampStart = intval(substr($request->published_at, 0, 10));
        $inputs['published_at'] = date('Y-m-d H:i:s', $realetimestampStart);




        //for title image
        if ($request->hasFile('image')) {
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'post');
            $result_image =  $imageService->fitAndSave($request->file('image'), 730, 450);

            $inputs['type'] = 'image';
            $inputs['image'] = $result_image;
        }
        //temporary for outhor_id
        $inputs['author_id'] = 1;
        $result = Post::create($inputs);
        $save_image  =  PostFile::create([
            'type' => $inputs['type'],
            'alt_text' => $inputs['alt_image'],
            'post_id' => $result->id,
            'path' => $inputs['image'],
        ]);

        if ($result) {
            return redirect()->route('admin.content.post.index')->with('success', 'پست با موفقیت ثبت شد');
        } else {
            return redirect()->route('admin.content.post.index')->with('error', 'مطلب ثبت نشد');
        }
    }


    public function fetch_categories()
    {

        $categories = PostCategory::orderBy('created_at')->get();

        return response()->json([
            'data' => $categories,
        ]);
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
    public function edit(Post $post)
    {
        dd($post);
        return view('admin.content.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
