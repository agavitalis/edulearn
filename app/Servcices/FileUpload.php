<?php

namespace App\Services;

class FileUpload
{

    static public function uploadFile($request, $file_name)
    {

        //upload discription image and create garden
        $extension = $request->file($file_name)->getClientOriginalExtension();
        $new_name = round(microtime(true)) . '.' . $extension;
        
        $request->file($file_name)->storeAs(
            'public/uploads', $new_name
        );

        return $new_name;
    }
}

