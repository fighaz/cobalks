<?php

namespace App\Http\Controllers;
use App\Models\Game;
use App\Models\GameAsset;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;

class UmumController extends Controller
{
    //
    public function beranda(){
        $data = Game::where('status',"tampil")->get();
        return view('beranda',compact('data'));
    }
    public function detail($id){
        $data = Game::find($id);
        $dev = User::find($data->developer_id);
        $comment = Comment::where('game_id', $id)->get();
        $asset = GameAsset::where('game_id', $id)->get();
        return view('detail',compact('data','dev','comment','asset','id'));
    }
    public function search(Request $request){
        $keyword = $request->search;
        $data = Game::where('status',"tampil")
                    ->orWhere('name', 'like', "%" . $keyword . "%")
                    ->orWhere('description', 'like', "%" . $keyword . "%")
                    ->orWhere('homepage', 'like', "%" . $keyword . "%")->get();
        return view('beranda',compact('data'));
    }
}
