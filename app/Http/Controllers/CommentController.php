<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Fed;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  public function store(Fed $fed)
  {
    $comment = new Comment;
    $comment->fed_id = $fed->id;
    $comment->content = request()->get('content');
    $comment->save();

    return redirect()->route('feds.show', $fed->id)->with('success', 'Comment posted successfully');
  }
}
