<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

        public function show(string $NewsName) {
            $teams = News::where('name', $NewsName)
                        ->first()
                        ->posts()
                        ->with('user')
                        ->latest()
                        ->paginate(10);

            return view('teams.index', compact('teams'));
        }
}
