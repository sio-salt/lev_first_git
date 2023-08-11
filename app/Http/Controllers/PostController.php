<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        /* $test = $post->orderBy('updated_at', 'DESC')->limit(2)->toSql() ; //確認用 */
        /* dd($test); //確認用 */
        // return view('posts.index')->with(['posts' => $post->get()]);  
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
}
?>
