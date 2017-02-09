<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function view() {
		$posts = Post::paginate(3);

		foreach ($posts as $post) {
			$post->name_autor = $post->user->name;
		}

		return \View::make('welcome')->with('posts',$posts);
	}
}
