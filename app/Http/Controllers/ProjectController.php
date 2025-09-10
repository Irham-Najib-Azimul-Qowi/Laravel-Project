<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'My First Laravel Project',
            'username' => 'learn-laravel',
            'message' => 'Hello, Developer!',
            'description' => 'ini adalah demonstrasi konsep MVC pada laravel tanpa database. Dengan gaya khas github.'
        ];

        return view('project-welcome', $data);
    }
}