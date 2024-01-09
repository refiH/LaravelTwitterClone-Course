<?php

namespace App\Http\Controllers;

use App\Models\Fed;
use Illuminate\Http\Request;

class FedController extends Controller
{
  public function store()
  {
    $idea = Fed::create([
      'content' => request()->get('content', '')
    ]);

    return redirect()->route('dashboard');
  }
}
