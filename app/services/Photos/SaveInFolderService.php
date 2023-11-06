<?php

namespace App\services\Photos;



use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Interfaces\Photos\SaveInFolderInterface;

class SaveInFolderService implements SaveInFolderInterface{

    public function saveIn($request, string $folderName)
    {

        $image = Image::make($request);
        $i=Image::make(public_path("logo.png"));
        $i->resize(300, 300);
        $i->blur();
        /**

         * Main Image Upload on Folder Code

         */

        $imageName = time().'-'.$request;

        $destinationPath = public_path('storage/profile/');

        File::makeDirectory($destinationPath, 0755, true, true);

        //$image->text('Viens-Yamo', 120, 120, function($font) {

              //$font->size(24);

              //$font->color([255, 255, 255, 0.5]);

              //$font->align('center');

              //$font->valign('top');
              //$font->angle(4);

        //});

        $image->insert($i,'center',2,2);
        $image->save($destinationPath.$imageName);


    }


}
