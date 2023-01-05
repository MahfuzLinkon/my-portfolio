<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\helper\Helper;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'long_title',
        'short_description',
        'long_description',
        'image',
        'status',
    ];

    public static function aboutUpdate($request, $id){
        About::updateOrCreate(['id'=> $id], [
            'title' => $request->title,
            'long_title' => $request->long_title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' =>Helper::interventionImage($request->image, 'about', isset($id)? About::find($id)->image : null, 859, 514),
        ]);
    }






    

}