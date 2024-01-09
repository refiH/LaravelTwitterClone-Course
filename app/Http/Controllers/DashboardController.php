<?php

namespace App\Http\Controllers;

use App\Models\Fed;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    return view('dashboard', [
      'feds' => Fed::orderBy('created_at', 'DESC')->get()
    ]);
  }
}
