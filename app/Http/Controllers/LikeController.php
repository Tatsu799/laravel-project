<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class LikeController extends Controller
{

    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function store(Post $post)
    {
        $post->likes()->create(['user_id' => Auth::id()]);
        return back();
    }

    public function destroy(Post $post)
    {
        $post->likes()->where('user_id', Auth::id())->delete();
        return back();
    }

    public function __construct()
    {
        return $this->middleware('auth');
    }
}
