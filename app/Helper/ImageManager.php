<?php

namespace App\Helper;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Image;

class ImageManager
{
    public static function uploadImage($image)
    {
        $dir = 'image/';
        if ($image != null) {

            $fileName   = time() . '-' . str_replace(' ', '', $image->getClientOriginalName());
            $photo = Image::make($image)
                    ->resize(1000,1000)
                    // ->blur(100,10) // 0 to 100
                    // ->crop(1500,1500)
                    ->text('This is a example ', 700, 950, function($font) {
                        $font->file(public_path('Admin/font/Poppins-Bold.ttf'));
                        $font->size(28);
                    })
                    ->encode('jpg',80);

            if (!Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir);
            }
            Storage::disk('public')->put($dir . $fileName, $photo);

            return $dir . $fileName;
        }
    }

    public static function removeImage($image)
    {
        if (Storage::disk('public')->exists($image)) {
            Storage::disk('public')->delete($image);
        }
        return [
            'success' => 1,
            'message' => 'Removed successfully !'
        ];
    }

    public static function updateImage($oldImage, $newImage)
    {
        $dir = 'image/';
        if (Storage::disk('public')->exists($oldImage)) {
            Storage::disk('public')->delete($oldImage);
        }
        $imageName = ImageManager::uploadImage($newImage);

        return $imageName;

    }

}
