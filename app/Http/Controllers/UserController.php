<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){

        return view('usuario.index');
    }
    public function getUser(){

        return User::all();
    }
    public function viewShow(){
        return view('usuario.show');
    }

    public function show($id){
        return User::find($id);
    }
    public function create(){
        return view('usuario.create');
    }
    public function store(Request $request){
        return User::create($request->all());
    }
    public function edit(){
        return view('usuario.edit');
    }
    public function update(Request $request,$id){
        $user = User::findOrfail($id);
        $user-> update($request->all());

        return $user;
    }

    public function delete(Request $request,$id){

        $user = User::findOrFail($id);
        $user->delete();

        return 204;
    }
    
}
