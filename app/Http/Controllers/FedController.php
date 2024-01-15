<?php

namespace App\Http\Controllers;

use App\Models\Fed;
use Illuminate\Http\Request;

class FedController extends Controller
{
  // get
  public function show(Fed $fed)
  {
    return view('feds.show', compact('fed'));
  }

  // post
  public function store()
  {
    request()->validate([
      'content' => 'required|min:3|max:255'
    ]);

    Fed::create([
      'content' => request()->get('content', '')
    ]);

    return redirect()->route('dashboard')->with('success', 'Fed created successfully!');
  }

  // delete
  public function destroy(Fed $fed)
  {
    $fed->delete();

    return redirect()->route('dashboard')->with('success', 'Fed deleted successfully!');
  }

  // edit
  public function edit(Fed $fed)
  {
    $editing = true;

    return view('feds.show', compact('fed', 'editing'));
  }

  // update
  public function update(Fed $fed)
  {
    request()->validate([
      'content' => 'required|min:3|max:255'
    ]);

    $fed->content = request()->get('content', '');
    $fed->save();

    return redirect()->route('feds.show', $fed->id)->with('success', 'Fed updated successfully');
  }
}
