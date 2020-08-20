<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\Filesystem;
use League\CommonMark\Inline\Element\Strong;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;

class VideoController extends Controller
{
    /**
     * Upload video to file storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function uploadVideo(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:mp4,mov,wmv,avi,mkv,flv|max:512000',
        ]);

        $storagePath = Storage::putFile('uploads', $request->file('file'));

        return response()->json([
            'path' => $storagePath,
        ]);
    }
    /**
     * Return video.
     *
     * @param  \Illuminate\Contracts\Filesystem\Filesystem  $filesystem
     * @param  String  $path
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render(Filesystem $filesystem, $path, Request $request)
    {
        
        $vid = Storage::get($path);
        return $vid;
    }
}
