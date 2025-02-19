<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontinens;

class KontinensController extends Controller
{
    public function Kontinens($id){
        return view('kontinens', [
            'menu'  =>  kontinens::OrderBy('nev')
                        ->get(),
            'data'  =>  kontinens::find($id)

        ]);
    }
}
