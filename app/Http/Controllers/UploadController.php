<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    
                $filePaths[] = $url;
            }
    
            return response()->json(['message' => 'Files uploaded successfully', 'paths' => $filePaths], 200);
        }
    
        return response()->json(['message' => 'No files received'], 400);
    }
    
}
