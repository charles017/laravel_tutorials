<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {

        // imagine we loaded data from the database
        $ourName = 'Charles';

        return view('homepage', ['name' => $ourName, 'work' => 'Agent']);
    }

    public function aboutPage() {
        return '<h1>About Page!!</h1><a href="/">Back to Home</a>';
    }
}
