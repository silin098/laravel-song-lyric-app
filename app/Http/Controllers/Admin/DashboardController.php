<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Artist;
use App\Models\Album;


class DashboardController extends Controller
{
    public function index()
    {
        //$count = ['artistCount'=>Artist::count(),'songCount'=>Song::count(),'albumCount'=>Album::count(),'genre'=>Artist::distinct()->count('genre')];

        return view('admin.dashboard');

    }
}
