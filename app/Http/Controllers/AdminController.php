<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function addIIA()
    {
        return view('admin.addIIA');
    }

    public function addVideo()
    {
        return view('admin.addVideo');
    }

    public function getAllImages()
{
    $images = DB::table('images')->get(); // Fetch all images once
    return response()->json($images); // Return JSON
}

public function getAllVideos()
{
    $videos = DB::table('videos')->get(); // Fetch all videos once
    return response()->json($videos); // Return JSON
}

public function destroyImages($id)
{
    $image = DB::table('images')->where('id', $id)->delete();
    return response()->json(['message' => 'Image deleted successfully'], 200);

}
public function destroyVideos($id)
{
    $video = DB::table('videos')->where('id', $id)->delete();
    return response()->json(['message' => 'Video deleted successfully'], 200);
}
}


