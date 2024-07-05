<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class LivewireController extends Controller
{
    public function home(Request $request){
        return view('pages.main');
    }
}
