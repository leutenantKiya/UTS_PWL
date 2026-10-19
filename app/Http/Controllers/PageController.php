<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('login');
    }
    public function course(){
        return view('courses');
    }
    public function student(){
        return view('students');
    }
    public function grade(){
        return view('grades');
    }
    public function assignment(){
        return view('assignments');
    }
    public function login(Request $request){
        $data = $request->all();
        // print_r($data);
        $nama = $data['nama'];
        // print_r($nama);
        return view('courses', compact('nama'));
    }
}
