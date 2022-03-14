<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;
use Image;
use App\Models\Project;
use Helper;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project_image = $request->file('image'); 

        $name_gen = hexdec(uniqid()).'.'.$project_image->getClientOriginalExtension();

        Image::make($project_image)->resize(1920, 1600)->save('images/project/'.$name_gen);

        $last_img = 'images/project/'.$name_gen;

           // To add data
        Project::insert([
            'image' => $last_img,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            

            'created_at' => Carbon::now(),
            
        ]);

        return Redirect()->route('home.project')->with('success', 'Project Inserted Successfull');
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
        $project = Project::find($id);
        return view('admin.project.edit', compact('project'));
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
                // To add image
                $project_image = $request->file('image'); //Need to Get the image from file field form FE
                $old_image = $request->old_image; //Need to Get the image from file field form FE
                if ($project_image) {
                   $name_gen = hexdec(uniqid()); //Need to generate the image name to number using hexdec
                   $img_ext = strtolower($project_image->getClientOriginalExtension()); //Need to get the image extension
                   $img_name = $name_gen.'.'.$img_ext; // Image file name 123.jpg
                   $upload_path = 'images/slider/'; // Image file path
                   $last_img = $upload_path.$img_name; // define the image path
                   $project_image->move($upload_path, $img_name); // Move the image to the path
                   
                //    unlink($old_image); // Delete the old image
          
                    $project = Project::find($id)->update([
                        'image' => $last_img,
                        'title' => $request->title,
                        'subtitle' => $request->subtitle,
                        'link' => $request->link,
                        

                        'created_at' => Carbon::now(),
                        
                    ]);
        
                  
          
                  return Redirect()->back()->with('success', 'Slider Updated Successfull');
                } else {
                    $project = Project::find($id)->update([
                       
                        'title' => $request->title,
                        'subtitle' => $request->subtitle,
                        'link' => $request->link,
                        

                        'created_at' => Carbon::now(),
                        
                    ]);
                  return Redirect()->route('home.project')->with('success', 'Slider Updated Successfull');
        
                }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return Redirect()->back()->with('success', 'Project Deleted Successfull');
    }
}
