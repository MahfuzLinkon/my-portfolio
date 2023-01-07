<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    public static function projectCategoryUpdateOrCreate($request, $id = null){
        ProjectCategory::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'status' => $request->status,
        ]);
    }
















}
