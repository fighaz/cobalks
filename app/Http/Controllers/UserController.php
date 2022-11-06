<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
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
        public function daftar()
        {
            return view('daftar');
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
                'email' => 'required|unique:users,email',
                'password' => 'required',
                'avatar' => 'nullable',
                'role' => 'required'
            ]);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->save();
            return redirect('/');

        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Game  $game
         * @return \Illuminate\Http\Response
         */
        public function show(Game $game)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Game  $game
         * @return \Illuminate\Http\Response
         */
        public function edit(Game $game)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\UpdateGameRequest  $request
         * @param  \App\Models\Game  $game
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Game  $game
         * @return \Illuminate\Http\Response
         */
        public function destroy(Game $game)
        {
            //
        }
}
