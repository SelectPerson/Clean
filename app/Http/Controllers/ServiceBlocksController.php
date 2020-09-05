<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ServiceBlocksController extends Controller
{
    public function index() {
        $generalclean = \App\ServiceBlocks::generalclean();

//         dd($generalclean);
        return view('layout',compact('generalclean'));
    }
}
