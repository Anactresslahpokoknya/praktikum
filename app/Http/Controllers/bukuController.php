<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function index(){
        $faizal = new bukuController;
    }
    public function form(){
        return view('buku.form');
    }
    
}
