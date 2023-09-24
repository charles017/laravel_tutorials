<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {

        // imagine we loaded data from the database
        $ourName = 'Charles';
        $animals =['Meowsalot','Barksalot', 'Purrsloud'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'work' => 'Agent']);
    }

    public function aboutPage() {
        return view('single-post');
    }
}
