<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;


class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AllMenu()
    {
        $navmenu = MenuItem::all();
        return view('admin.menuItems.create', compact('navmenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreateMenu()
    {
        return view('admin.menuitems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreMenu(Request $request)
    {
        MenuItem::insert([
            'name' => $request->name,
            'link' => $request->link,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Menu Item Created Successfully');

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $menu = MenuItem::find($id);

        return view('admin.menuItems.edit', compact('menu'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = MenuItem::find($id)->update([
            'name' => $request->name,
            'link' => $request->link,
            'status' => $request->status,
          
          ]);

          return redirect()->route('all.menu')->with('success', 'Menu Item Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = MenuItem::find($id)->delete();

        return redirect()->back()->with('success', 'Menu Item Deleted Successfully');
    }
}
