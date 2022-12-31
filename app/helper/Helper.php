<?php
namespace App\helper;

class Helper
{
    public static function uploadFile($fileObject, $directory, $existingUrl = null){
        if ($fileObject) {
            if($existingUrl){
                if(file_exists($existingUrl)){
                    unlink($existingUrl);
                }
            }
            $fileName = time().rand(20, 20000).$fileObject->getClientOriginalName();
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







}