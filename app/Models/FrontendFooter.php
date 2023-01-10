<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendFooter extends Model
{
    use HasFactory;

    protected $fillable =[
        'phone',
        'email',
        'facebook',
        'twitter',
        'github',
        'instagram',
        'linkedin',
    ];

    public static function updateFooter($request, $id){
        FrontendFooter::updateOrCreate(['id'=>$id],[
            'phone' => $request->phone,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'github' => $request->github,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);
    }


}
