<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;

class ImageController extends Controller
{
     /**
     * Upload image to file storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpeg,jpg,svg|max:5120',
        ]);

        $storagePath = Storage::putFile('uploads', $request->file('file'));

        return response()->json([
            'path' => $storagePath,
        ]);
    }

    /**
     * Return image.
     *
     * @param  \Illuminate\Contracts\Filesystem\Filesystem  $filesystem
     * @param  String  $path
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render(Filesystem $filesystem, $path, Request $request)
    {
        $server = ServerFactory::create([
            'response' => new LaravelResponseFactory(app('request')),
            'source' => $filesystem->getDriver(),
            'cache' => $filesystem->getDriver(),
            'cache_path_prefix' => '.cache',
            'base_url' => 'image',
        ]);

        return $server->getImageResponse($path, $request->all());
    }
}
