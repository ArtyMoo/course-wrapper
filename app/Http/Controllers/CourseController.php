<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Course;
use GuzzleHttp\Promise\Coroutine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class CourseController extends Controller
{
    public function index()
    {
        return view('livewire.courses-list', [
            'courses' => Course::all(),
        ]);
    }

    public function show(Request $request, $authorSlug, $courseSlug)
    {
        if(File::exists(public_path($authorSlug . '/' . $courseSlug . '/video')))
            $videoDir = File::files( public_path($authorSlug . '/' . $courseSlug . '/video') );
        else
            return view('playlists.course-404');

        return response()->view('playlists.course-page', [
            'authorSlug' => $authorSlug,
            'courseSlug' => $courseSlug,
            'fileCount' => count($videoDir)
        ]);
    }
}
