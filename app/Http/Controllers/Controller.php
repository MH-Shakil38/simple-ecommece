<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function uploadImage($file, $path)
    {
        if ($file != null) {
            $imageName = $path . time() . '.' . $file->getClientOriginalName();
            $file->move(public_path($path), $imageName);
            return $imageName;
        } else {
            return null;
        }
    }


    public function throwError($e)
    {
        dd($e->getCode(), $e->getFile(), $e->getLine(), $e->getMessage());
    }
}
