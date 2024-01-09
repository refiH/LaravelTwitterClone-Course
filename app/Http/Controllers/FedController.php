<?php

namespace App\Http\Controllers;

use App\Models\Fed;
use Illuminate\Http\Request;

class FedController extends Controller
{
  public function store()
  {
    request()->validate([
      'content' => 'required|min:3|max:255'
    ]);

    $idea = Fed::create([
      'content' => request()->get('content', '')
    ]);

    return redirect()->route('dashboard')->with('success', 'Idea created successfully!');
  }
}
