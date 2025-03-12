<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\JpegEncoder;
use Intervention\Image\Encoders\PngEncoder;
use Intervention\Image\Encoders\GifEncoder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use FFMpeg\FFMpeg;
use FFMpeg\Format\Video\X264;
use FFMpeg\Coordinate\Dimension;
use FFMpeg\Coordinate\FrameRate;



class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'files.*' => 'required|file|mimes:jpeg,png,jpg,gif,pdf|max:10120',
        ]);
    
        if ($request->hasFile('files')) {
            $uploadedFiles = $request->file('files');
            $filePaths = [];
            $manager = new ImageManager(new Driver()); // ✅ Use GD Driver
    
            foreach ($uploadedFiles as $file) {
                // Generate unique file name
                $fileName = time() . '_' . $file->getClientOriginalName();
    
                // Reduce image quality (only for images)
                $extension = strtolower($file->getClientOriginalExtension());
                if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                    // Select the correct encoder
                    $encoder = match ($extension) {
                        'jpg', 'jpeg' => new JpegEncoder(quality: 70),
                        'png' => new PngEncoder(compressionLevel: 9),
                        'gif' => new GifEncoder(),
                        default => null,
                    };
    
                    if ($encoder) {
                        $image = $manager->read($file)->encode($encoder);
                        file_put_contents($file->getPathname(), (string) $image); // ✅ Overwrite file
                    }
                }
    
                // Upload file to S3
                $path = Storage::disk('s3')->putFileAs('cdn/advoq', $file, $fileName, 's3');
    
                // Get the public URL of the uploaded file
                $url = Storage::disk('s3')->url($path);
    
                // Store URL in database
                DB::table('images')->insert([
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
        'file' => 'required|file|mimes:mp4,mov,avi,wmv,flv,3gp|max:101200', // Max 50MB
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
