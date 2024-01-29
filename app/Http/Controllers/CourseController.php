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
        return view('index', [
            'courses' => Course::all(),
            'authors' => Course::with('author')->get(),
            'categories' => Course::with('category')->get()
        ]);
    }

    public function show(Request $request, $authorSlug, $courseSlug)
    {
        $videoDir = File::files( public_path($authorSlug . '-' . $courseSlug . '/video') );

        return response()->view('playlists.course-page', [
            'authorSlug' => $authorSlug,
            'courseSlug' => $courseSlug,
            'fileCount' => count($videoDir)
        ]);
    }
}
