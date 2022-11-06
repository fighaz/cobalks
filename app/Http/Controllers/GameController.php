<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $game = Game::where('developer_id', session('iduser'))->get();
        return view('games.index',compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('games.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'homepage' => 'required',
            'cover' => 'required|file|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $game = new Game();
        $game->developer_id = session('iduser');
        $game->name = $request->name;
        $game->description = $request->description;
        $game->homepage = $request->homepage;
        $namacover = time().'.'.$request->cover->extension();
        $request->cover->move(public_path('img'), $namacover);
        $game->cover = $namacover;
        $game->status ="tunda";
        $game->save();
        return redirect('games/berandadev');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        //
        $game = Game::findOrfail($id);
        return view('gameassset.index',compact('gameasset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $game = Game::find($id);
        return view('games.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameRequest  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        //
        $game = Game::findOrfail($id);
        $request->validate([
            'cover' => 'required|file|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $game->developer_id = session('iduser') ;
        $game->name = $request->name;
        $game->description = $request->description;
        $game->homepage = $request->homepage;
        $namacover = time().'.'.$request->cover->extension();
        $request->cover->move(public_path('img'), $namacover);
        $game->cover = $namacover;
        $game->status = "tunda";
        $game->save();
        return redirect('games/berandadev');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $game= Game::findOrfail($id);
        $game->delete();
        return redirect('games/berandadev');
    }

    
}
