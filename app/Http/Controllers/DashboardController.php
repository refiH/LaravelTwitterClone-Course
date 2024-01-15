<?php

namespace App\Http\Controllers;

use App\Models\Fed;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $feds = Fed::orderBy('created_at', 'DESC');

    if (request()->has('search')) {
      $feds = $feds->where('content', 'like', '%' . request()->get('search', '') . '%');
    }

    return view('dashboard', [
      'feds' => $feds->paginate(5)
    ]);
  }
}
