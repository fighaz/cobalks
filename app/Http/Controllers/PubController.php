<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\GameAsset;
class PubController extends Controller
{
    //
    public function publish(){
        $data = Game::where('status',"tunda")->get();
        return view('games.verify',compact('data'));
    }

    public function detail($id){
        $data = GameAsset::where('game_id',$id)->get();
        return view('games.detail',compact('data', 'id'));
    }
    public function verify($id){
        $data = Game::find($id);
        $data->status = "tampil";
        $data->save();
        return redirect('pub/berandapub');
    }
}
