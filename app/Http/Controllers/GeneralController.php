<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class GeneralController extends Controller
{
    public function index() {
        $videos = Video::get();
        return view('general', compact('videos'));
    }
}
