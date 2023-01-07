<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutMultiImage;
use Illuminate\Http\Request;

class AboutMultiImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.about-multi-image', [
            'images' => AboutMultiImage::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create-multi-image');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AboutMultiImage::multiImageUpdateOrCreate($request);
        return redirect()->back()->with('success', 'Images Inserted Successfully');
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
        return view('admin.about.edit-multi-image', [
            'image' => AboutMultiImage::where('id', $id)->first(),
        ]);
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
        AboutMultiImage::multiImageUpdateOrCreate($request, $id);
        return redirect()->route('about-images.index')->with('success', 'Image Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = AboutMultiImage::find($id);
        if($image->image){
            if(file_exists($image->image)){
                unlink($image->image);
            }
        }
        $image->delete();
        return redirect()->route('about-images.index')->with('success', 'Image Deleted Successfully');
    }

    public function multiImageStatus($id){
        $image = AboutMultiImage::find($id);
        if($image->status == 0 ){
            $image->status = 1;
            
        }else{
            $image->status = 0;
        }
       
        $image->save();
        return redirect()->back()->with('success', 'Image Status changed Successfully');
    }




}
