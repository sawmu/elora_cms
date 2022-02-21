<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuSocial;
use Auth;
use Illuminate\Support\Carbon;
use Image;

class MenuSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menusocial = MenuSocial::all();
        return view('admin.menusocial.create', compact('menusocial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        // To add data
        MenuSocial::insert([
            'name' => $request->name,
            'image' => $request->image,
            'link' => $request->link,
            'created_at' => Carbon::now(),
            
        ]);

        return Redirect()->back()->with('success', 'Icon Inserted Successfull');
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
        $menu = MenuSocial::find($id);
        return view('admin.menusocial.edit', compact('menu'));
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
        $menu = MenuSocial::find($id)->update([
            'name' => $request->name,
            'image' => $request->image,
            'link' => $request->link,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('create.social')->with('success', 'Icon Updated Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = MenuSocial::find($id)->delete();
        return redirect()->route('create.social')->with('success', 'Icon Deleted Successfull');
    }
}
