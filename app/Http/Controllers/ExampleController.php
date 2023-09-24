<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        return '<h1>Home Page!!</h1><a href="/about">View About Page</a>';
    }

    public function aboutPage() {
        return '<h1>About Page!!</h1><a href="/">Back to Home</a>';
    }
}
