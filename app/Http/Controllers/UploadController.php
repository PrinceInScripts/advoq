<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'files.*' => 'required|file|mimes:jpeg,png,jpg,gif,pdf|max:5120',
        ]);
    
        if ($request->hasFile('files')) {
            $uploadedFiles = $request->file('files');
            $filePaths = [];
    
            foreach ($uploadedFiles as $file) {
                // Generate unique file name
                $fileName = time() . '_' . $file->getClientOriginalName();
    
                // Upload file to S3
                $path = Storage::disk('s3')->putFileAs('cdn/advoq', $file, $fileName, 's3');
    
                // Get the public URL of the uploaded file
                $url = Storage::disk('s3')->url($path);

                // store url in database on images table url and type
                $images=DB::table('images')->insert([
                    'url' => $url,
                    'type' => $request->type,
                ]);

              
    
                $filePaths[] = $url;
            }
    
            return response()->json(['message' => 'Files uploaded successfully', 'paths' => $filePaths], 200);
        }
    
        return response()->json(['message' => 'No files received'], 400);
    }

    // public function storeVideo(Request $request)
    // {
       
    //     $request->validate([
    //         'file' => 'required|file|mimes:mp4,mov,avi,wmv,flv,3gp|max:51200',
    //     ]);
    
    //     if ($request->hasFile('file')) {
    //         $uploadedFile = $request->file('file');
    
    //         // Generate unique file name
    //         $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
    
    //         // Upload file to S3
    //         $path = Storage::disk('s3')->putFileAs('cdn/advoq', $uploadedFile, $fileName, 's3');
    
    //         // Get the public URL of the uploaded file
    //         $url = Storage::disk('s3')->url($path);

    //         // store url in database on videos table url and title and type
    //         // $videos=DB::table('videos')->insert([
    //         //     'url' => $url,
    //         //     'title' => $request->title,
    //         //     'brand' => $request->brand,
    //         // ]);
    
    //         return response()->json(['message' => 'File uploaded successfully', 'path' => $url], 200);
    //     }
    
    //     return response()->json(['message' => 'No file received'], 400);
    // }

    public function storeVideo(Request $request)
{
    $request->validate([
        'file' => 'required|file|mimes:mp4,mov,avi,wmv,flv,3gp|max:51200', // Max 50MB
        'title' => 'required|string|max:255',
        'brand' => 'nullable|string|max:255',
    ]);

    if ($request->hasFile('file')) {
        $uploadedFile = $request->file('file');

        // Generate a unique filename
        $fileName = time() . '_' . preg_replace('/\s+/', '_', $uploadedFile->getClientOriginalName());

        // Upload file to S3 with public access
        $path = Storage::disk('s3')->putFileAs('cdn/advoq', $uploadedFile, $fileName, 'public');

        // Get the file URL
        $url = Storage::disk('s3')->url($path);

        // Store in Database
        DB::table('videos')->insert([
            'url' => $url,
            'title' => $request->title,
            'brand' => $request->brand,
           
        ]);

        return response()->json(['message' => 'File uploaded successfully', 'url' => $url], 200);
    }

    return response()->json(['message' => 'No file received'], 400);
}
    
}
