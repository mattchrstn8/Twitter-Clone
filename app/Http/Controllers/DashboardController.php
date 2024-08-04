<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
public function index(){
    $users = [
        [
            "name"=> "Alex",
            "age"=> "22",
        ],
        [
            "name"=> "Dan",
            "age"=> "22",
        ],
        [
            "name"=> "John",
            "age"=> "18",
        ]
        ];
        
    return view ('Dashboard',
    [
        'users'=> $users
    ]
    );
}
}
