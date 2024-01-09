<?php

namespace App\Http\Controllers;

use App\Models\Fed;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    // $idea = new Fed([
    //   'content' => 'test1'
    // ]);
    // $idea->save();

    dump(Fed::all());

    return view('dashboard', [
      'feds' => Fed::orderBy('created_at', 'DESC')->get()
    ]);
  }
}
