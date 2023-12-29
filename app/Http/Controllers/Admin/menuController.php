<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::orderBy('created_at', 'desc')->get();
        // dd($menus->where('parent_id', null)->count());
        return view('admin.menu.index', compact('menus'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['parent_id']  = $request->parent_id == 'default_option' ? null : $request->parent_id;

        $result = Menu::create($inputs);
        if ($result) {
            return redirect()->route('admin.menu.index')->with('success', 'منو جدید با موفقیت اضافه شد');
        } else {
            return redirect()->route('admin.menu.index');
        }
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
    public function edit(Menu $menu)
    {

        $parents = Menu::where('parent_id', null)->get();
        return response()->json([
            'status_response' => true,
            'data' => $menu,
            'parents' => $parents,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $inputs = $request->all();
        $inputs['parent_id']  = $request->parent_id == 'default_option' ? null : $request->parent_id;
        $result = $menu->update($inputs);

        if ($result) {
            return redirect()->route('admin.menu.index')->with('success', 'منو  با موفقیت ویرایش شد');
        } else {
            return redirect()->route('admin.menu.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        // dd($menu);
        $result = $menu->delete();
        if ($result) {
            return redirect()->route('admin.menu.index')->with('success', 'اطلاعات با موفقیت حذف شد');
        } else {
            return redirect()->route('admin.menu.index');
        }
    }
}
