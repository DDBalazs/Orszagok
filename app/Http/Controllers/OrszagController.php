<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orszag;
use App\Models\Kontinens;

class OrszagController extends Controller
{
    public function Orszag($id){
        return view('orszag', [

            ##select kontinent_nev from orszag, kontinens where orszag.kontinens_id = kontinens.kontinens_id order by kontinens.kontinens_id
            'menu'  =>  orszag::select('kontinens.nev','orszag.kontinens_id')
                                ->join('kontinens','orszag.kontinens_id','kontinens.kontinens_id')
                                ->groupBy('kontinens.nev','orszag.kontinens_id')
                                ->orderBy('kontinens.nev')
                                ->get(),
            'data'  =>  kontinens::find($id),
            'db'    =>  orszag::count('kontinens_id')
        ]);
    }
}
