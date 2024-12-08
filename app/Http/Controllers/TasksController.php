<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
  public function index()
  {
    return view('tasks.index')->with('tasks', Task::all());
  }
}
