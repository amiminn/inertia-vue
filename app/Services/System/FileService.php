<?php

namespace App\Services\System;

use App\Services\Response;
use Illuminate\Support\Facades\Storage;

class FileService
{
    public static function saveOnetoAsset($request, $name, $path)
    {
        $file = $request->file($name);
        return $file->storeAs('assets/' . $path, Response::epoch() . "-" . $file->getClientOriginalName());
    }

    public static function saveMultitoAsset($request, $name, $path)
    {
        $result = [];
        if ($files = $request->file($name)) {
            foreach ($files as $file) {
                $name = Response::epoch() . '-' . $file->getClientOriginalName();
                $file->move('assets/' . $path, $name);
                $result[] = 'assets/' . $path . '/' . $name;
            }
        }

        return $result;
    }

    public static function deleteFileAsset($path)
    {
        Storage::delete($path);
    }
}
