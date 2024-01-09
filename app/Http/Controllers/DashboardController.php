<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $users = [
      [
        'name' => 'John',
        'age' => 30
      ],
      [
        'name' => 'James',
        'age' => 25
      ],
      [
        'name' => 'John1',
        'age' => 17
      ],
      [
        'name' => 'James1',
        'age' => 20
      ],
    ];
    return view('dashboard', ['users' => $users]);
  }
}
