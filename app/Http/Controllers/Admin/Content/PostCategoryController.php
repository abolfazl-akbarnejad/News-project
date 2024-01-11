<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Content\PostCategoryRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Content\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = PostCategory::orderBy('created_at', 'desc')->get();
        return view('admin.content.post_category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.post_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostCategoryRequest $request, ImageService $imageService)
    {
        $inputs = $request->all();

        //checked file image
        if ($request->hasFile('image')) {
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'post_category');
            $result_image =  $imageService->fitAndSave($request->file('image'), 300, 110);
            $inputs['image'] = $result_image;
        }


        $result = PostCategory::create($inputs);
        if ($result) {
            //redirect id success
            return redirect()->route('admin.content.category.index');
        } else {
            //redirect if error
            return redirect()->route('admin.content.category.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PostCategory $category)
    {
        return view('admin.content.post_category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostCategory $category)
    {
        return view('admin.content.post_category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostCategoryRequest $request, PostCategory $category, ImageService $imageService)
    {
        $inputs = $request->all();

        //checked file image
        if ($request->hasFile('image')) {
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'post_category');
            $result_image =  $imageService->fitAndSave($request->file('image'), 300, 110);
            $imageService->deleteImage($category->image);
            $inputs['image'] = $result_image;
        }


        $result = $category->update($inputs);
        if ($result) {
            //redirect id success
            return redirect()->route('admin.content.category.index');
        } else {
            //redirect if error
            return redirect()->route('admin.content.category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostCategory $category)
    {
        $result = $category->delete();

        unlink($category->image);

        if ($category) {
            return redirect()->route('admin.content.category.index')->with('success', 'اطلاعات با موفقیت حذف شد');
        } else {
            return redirect()->route('admin.content.category.index');
        }
    }
}
