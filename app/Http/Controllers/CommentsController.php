<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CommentsController extends Controller
{
	public function addComment(Request $req)
	{
		DB::table('comments')->insert([
			'comment' => $req->get('comment'),
			'comic_id' => $req->get('comic_id'),
			'user_id' => \Auth::user()->id,
			'created_at' => Carbon::now(),
		]);

		return true;
	}

}
