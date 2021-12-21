<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            echo '<script>if(confirm("Username or password is not matched")){
                window.location.replace("http://localhost:8000/login");
            }</script>)';
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function register(Request $req){
        DB::table('users')->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password)
        ]);
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            echo '<script>if(confirm("Username or password is not matched")){
                window.location.replace("http://localhost:8000/register");
            }</script>)';
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
