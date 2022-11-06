<?php

namespace App\Http\Controllers;

use App\Models\GameAsset;
use Illuminate\Http\Request;

class GameAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $gameasset = GameAsset::where('game_id',$id)->get();
        return view('gameasset.index',compact('gameasset', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameAssetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        //
        $request->validate([
            'path' => 'required|file|image|mimes:jpg,jpeg,png|max:2048',
            'featured_image' => 'nullable',
        ]);
        $gameasset = new GameAsset();
        $gameasset->game_id = $id;
        $namagambar = time().'.'.$request->path->extension();
        $request->path->move(public_path('img'), $namagambar);
        $gameasset->path = $namagambar;
        $gameasset->featured_image = 1;
        $gameasset->save();
        return redirect('gameasset/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameAsset  $gameAsset
     * @return \Illuminate\Http\Response
     */
    public function show(GameAsset $gameAsset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameAsset  $gameAsset
     * @return \Illuminate\Http\Response
     */
    public function edit(GameAsset $gameAsset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameAssetRequest  $request
     * @param  \App\Models\GameAsset  $gameAsset
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameAssetRequest $request, GameAsset $gameAsset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameAsset  $gameAsset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gameasset = GameAsset::findOrfail($id);
        $gameasset->delete();
        return redirect('gameasset/'.$id);
    }
}
