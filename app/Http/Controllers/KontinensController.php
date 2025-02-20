<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontinens;
use App\Models\Orszag;

class KontinensController extends Controller
{
    public function Kontinens($id){
        return view('kontinens', [
            'menu'  =>  kontinens::OrderBy('nev')
                        ->get(),
            'data'  =>  kontinens::find($id),
            'db'    =>  orszag::where('kontinens_id',$id)
                                    ->count('nev')
        ]);
    }
}
