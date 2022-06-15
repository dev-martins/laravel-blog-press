<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;
use Eihror\Compress\Compress;

trait UploadFiles
{
    public function uploadPublicFile($file, $folder = "images")
    {
        $filePath =  $folder . DIRECTORY_SEPARATOR;
        if (Storage::disk('s3-public')->put($filePath, $file))
            return env('CLOUD_FRONT_PUBLIC') . $filePath .  $file->hashName();
    }

    public function uploadPublicFileCompress($file, $file_name, $folder = 'images')
    {
        $filePath =  $folder . DIRECTORY_SEPARATOR;
        if (Storage::disk('s3-public')->put($filePath . $file_name, (string) $file))
            return env('CLOUD_FRONT_PUBLIC') . $filePath .  $file_name;
    }

    public function compressImages($file, $folder = 'images')
    {
        $quality = 1;
        $png_quality = 9; // Exclusivo para arquivos PNG
        $folder = storage_path('app/public'); // Este destino deve existir em seu projeto
        $maxsize = 5245330; // Defina o tamanho máximo da imagem em bytes. se nenhum valor for dado 5mb por padrão.

        $image_compress = new Compress($file, $file->hashName(), $quality, $png_quality, $folder, $maxsize);
        $file = $image_compress->compress_image();

        $url_file = $this->uploadPublicFileCompress(Storage::disk('public')->get($file), $file);

        $this->removeImagePublicDisk($file);

        return $url_file;
    }

    public function removeImagePublicDisk($file, $disk = 'public')
    {
        Storage::disk($disk)->delete($file);
    }
}
