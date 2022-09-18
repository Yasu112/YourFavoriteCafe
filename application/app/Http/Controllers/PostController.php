<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;


class PostController extends Controller
{
    /**
     * Post一覧を表示する
     * 
     * @param Post Postモデル
     * @return array Postモデルリスト
     */
    public function index(Cafe $cafes)
    {
        return view('/index')->with(['cafes' => $cafes->get()]);  
    }
}
