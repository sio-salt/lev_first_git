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
    
    /**
     * 特定IDのpostを表示する
     * 
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Response post view
     */
     public function show(Post $post)
     {
         return view('posts.show')->with(['post' => $post]);
         // 'post'はbladeファイルで使う変数。中身の$postはid=1のPostインスタンス
     }
     
     public function create() 
     {
         return view('posts.create');
     }
}
?>
