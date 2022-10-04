<?php

declare(strict_types=1);

namespace Companybase\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Storage;
use Illuminate\Support\Facades\File;

trait StorageImageTrait
{
    public function uploadAvatar(UploadedFile $file, $folder = null, $filename = null)
    {
        $name = !is_null($filename)
            ? $filename
            : pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

        return $file->storeAs(
            $folder,
            $name . "_" . date('mdYHis') . "_" . uniqid() . "." . $file->getClientOriginalExtension()
        );
    }
}
