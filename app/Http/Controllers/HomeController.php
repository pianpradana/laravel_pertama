<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubscriptionFormRequest;

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

        //Belajar JSON
        // $data = [
        //         'post' => [
        //             ['id' => 1, 'title' => 'ABC'],
        //             ['id' => 2, 'title' => 'DEF'],
        //             ['id' => 3, 'title' => 'GHI'],
        //         ]
        //     ]; 

        //     return response()->json($data);

        // return response()->json([
        //         'post' => [
        //             ['id' => 1, 'title' => 'ABC'],
        //             ['id' => 2, 'title' => 'DEF'],
        //             ['id' => 3, 'title' => 'GHI'],
        //         ]
        //     ]);



            return view('home');

            // return redirect()->to('lain'); 

    }

    public function other(){

        return 'Other route';
    }

    public function store (SubscriptionFormRequest $request){
        
        // dd('Berhasil langganan');
        // return redirect()->to('lain'); 
        // return redirect()->back(); / return back(); --> kembali ke halaman sebelumnya 

        return redirect()->route('other');



    }

}
