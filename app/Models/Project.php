<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'location',
        'link',
        'finish_date',
        'description',
        'image',
        'status',
    ];

    public static function projectUpdateOrCreate($request, $id = null){
        Project::updateOrCreate(['id'=> $id], [
            'category_id' => $request->category_id,
            'name' => $request->name,
            'location' => $request->location,
            'link' => $request->link,
            'finish_date' => $request->finish_date,
            'description' => $request->description,
            'image' => Helper::interventionImage($request->image, 'projects', isset($id) ? Project::find($id)->image : null, 1020, 519),
        ]);
    }

    public function category(){
        return $this->belongsTo(ProjectCategory::class, 'category_id', 'id');
    }


}
