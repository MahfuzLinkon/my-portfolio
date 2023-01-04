<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slider.index', [
            'sliders' => Slider::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
            'link' => 'required',
            'image' => 'required',
        ]);
        Slider::sliderUpdateOrCreate($request);
        return redirect()->back()->with('success', 'Slider Created Successfully');
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
        return view('admin.slider.edit', [
            'slider' => Slider::find($id),
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
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
            'link' => 'required',
        ]);
        Slider::sliderUpdateOrCreate($request, $id);
        return redirect()->route('sliders.index')->with('success', 'Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::where('id', $id)->first();
        if($slider->image){
            if(file_exists($slider->image)){
                unlink($slider->image);
            }
        }
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider Deleted Successfully');
    }

    public function sliderActive($id){
        $sliders = Slider::all();
            foreach($sliders as $item){
                if($item->id == $id){
                    $item->status = 1;
                }
                if($item->id != $id){
                    $item->status = 0;
                }
                $item->save();
            }
        
        return redirect()->back()->with('success', 'Slider Status Changed');
    }
}
