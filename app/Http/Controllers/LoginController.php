<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $data = User::where('email',$request->email)->get()->first();
        if(Hash::check($request->password,$data->password)){
            session(['iduser' => $data->id]);
            session(['name' => $data->name]);
            session(['email' => $data->email]);
            session(['role' => $data->role]);
            if(session('role') == "Developer"){
                return redirect('games/berandadev');
            }else if(session('role') == "Publisher"){
                return redirect('pub/berandapub');
            }else{
                return redirect('/');
            }

        }else{
            return redirect('login');
        }

    }
    public function keluar(){
        session()->flush();
        return redirect('login');
    }
}
