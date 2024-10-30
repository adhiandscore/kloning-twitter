<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        $users = [
        [
            'name' => 'Alex',
            'age' => 30,
        ],
        [
            'name' => 'Adhi',
            'age' => 24,
        ],
        [
            'name' => 'Linus',
            'age' => 9,
        ]];

        return view('dashboard',
            ['userLists' => $users]
    );
    }
}
