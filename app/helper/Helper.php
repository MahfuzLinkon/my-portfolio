<?php
namespace App\helper;

use Intervention\Image\Facades\Image;

class Helper
{
    public static function uploadFile($fileObject, $directory, $existingUrl = null){
        if ($fileObject) {
            if($existingUrl){
                if(file_exists($existingUrl)){
                    unlink($existingUrl);
                }
            }
            $fileName = time().$fileObject->getClientOriginalName();
                $fileDirectory = 'uploads/images/'.$directory.'/';
                $fileObject->move($fileDirectory, $fileName);
                $fileUrl = $fileDirectory.$fileName;
                
        }else{
            if($existingUrl){
                $fileUrl = $existingUrl;
            }else{
                $fileUrl = null;
            }
        }
        return $fileUrl;
    }

    public static function interventionImage($imageObject, $directory, $existingUrl= null, $width, $height){
        if($imageObject){
            if($existingUrl){
                if(file_exists($existingUrl)){
                    unlink($existingUrl);
                }
            }
            $imageName = time().$imageObject->getClientOriginalName();
            $imageDirectory = 'uploads/images/'.$directory.'/';
            Image::make($imageObject)->resize($width, $height)->save($imageDirectory.$imageName);
            $imageUrl = $imageDirectory.$imageName;
        }else{
            if($existingUrl){
                $imageUrl = $existingUrl;
            }else{
                $imageUrl = null;
            }
        }
        return $imageUrl;
    }







}