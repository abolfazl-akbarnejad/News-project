<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Layout\MenuRequest;
use App\Models\Layout\Menu;
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus  = Menu::where('parent_id', null)->get();
        return view('admin.menu.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        $inputs = $request->all();
        $inputs['parent_id']  = $request->parent_id == 'defult_option' ? null : $request->parent_id;

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
        $menus = Menu::where('parent_id', null)->get();
        return view('admin.menu.edit', compact('menu', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request, Menu $menu)
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
        $result = $menu->delete();
        if ($result) {
            return redirect()->route('admin.menu.index')->with('success', 'اطلاعات با موفقیت حذف شد');
        } else {
            return redirect()->route('admin.menu.index');
        }
    }
}
