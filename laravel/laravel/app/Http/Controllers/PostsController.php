<?php
namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::OrderBy("id", "DESC")->paginate(5);

        $outPut = [
            "message" => "posts", "result" => $posts
        ];

        return response()->json($posts, 200);
    }
}
?>