<?php

namespace App\Traits;

use Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

trait ImportTrait
{
    public function insertFormMedia($files, $disk, $obj=null)
    {
        foreach ($files as $key => $file) {
            $lastRecord = $this->insertMedia($file, $disk, $obj, $key);
        }
        return $lastRecord;
    }

    public function insertMedia($file, $disk = 'media', $obj, $key=0)
    {
        $obj = $obj ?? auth()->user();
        $media = Media::find($key);
        if ($media) {
            Storage::disk($disk)->delete($media->file_name);
        } else {
            $media = new Media();
            $obj->model()->delete();
        }
        $name = $file->getClientOriginalName();
        $imagePath = Storage::disk($disk)->put($obj->id, $file);
        $media->name = $name;
        $media->file_name = $imagePath;
        $media->disk = $disk;
        $media->mime_type = $file->getMimeType();
       
        $obj->model()->save($media);
        $media->save();
        return $media;
    }

}
