<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'short_description',
        'link',
        'image',
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function sliderUpdateOrCreate($request, $id = null){
        Slider::updateOrCreate(['id'=> $id], [
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'link' => $request->link,
            'image' => $request->image,
        ]);
    }




}
