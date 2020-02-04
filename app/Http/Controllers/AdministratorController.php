<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AdministratorController extends Controller
{
    public function index()
    {
        return Inertia::render('Administrator/Index',[
            'title' => 'Welcome',
            'description' => 'Welcome to the club'
        ]);
    }
}
