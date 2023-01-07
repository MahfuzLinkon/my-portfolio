<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMultiImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'status',
    ];

    public static function multiImageUpdateOrCreate($request, $id=null){
        $images = $request->images;
        foreach ($images as $image){
            AboutMultiImage::UpdateOrCreate(['id' => $id], [
                'image' => Helper::interventionImage($image, 'about-multi', isset($id) ? AboutMultiImage::find($id)->image : null, 220, 220),
            ]);
        }
        
    }





}
