<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Membuat Controller php artisan make:controller NamaController
//Membuat Controller di dalam folder php artisan NamaFolder\\NamaController

class HomeController extends Controller
{

    // public function index(Request $request){

    // public function index($username){

        public function index(){

        // return view('user/index')->with([
        //     'username' => $username,
        //     'fullName' => 'Alfian',
        //     'backName' => 'Pradana'
        // ]);

            return view('todo');

    }

    public function store (Request $request){
        
        dd($request->todo);
    }

}
